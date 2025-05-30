const canvas = document.getElementById("interactiveCanvas");
const ctx = canvas.getContext("2d");

// Set initial opacity to 0 for fade-in effect
canvas.style.opacity = 0;
canvas.style.transition = "opacity 1.5s ease-in-out";

function resizeCanvas() {
    // Get the parent section of the canvas
    const section = canvas.parentElement;
    const rect = section.getBoundingClientRect();
    // Set the canvas drawing buffer dimensions
    canvas.width = rect.width;
    canvas.height = rect.height;
    // Position the canvas at the top-left corner of the section
    canvas.style.position = "absolute";
    canvas.style.top = "0";
    canvas.style.left = "0";
    
    initializeCircles();
}

const circleRadius = 2; // Circle radius
const gap = 4; // Gap between circles
const diameter = circleRadius * 2 + gap;

const circles = [];
const stars = [];
const comets = [];

const starCount = 100; // Number of stars
let mouseX = -1;
let mouseY = -1;
let isMouseMoving = false;

// Initialize circles and stars
function initializeCircles() {
    circles.length = 0;
    const cols = Math.ceil(canvas.width / diameter);
    const rows = Math.ceil(canvas.height / diameter);

    for (let row = 0; row < rows; row++) {
        for (let col = 0; col < cols; col++) {
            circles.push({
                x: col * diameter + circleRadius + gap / 2,
                y: row * diameter + circleRadius + gap / 2,
                opacity: 0,
                glow: 0,
            });
        }
    }

    stars.length = 0;
    for (let i = 0; i < starCount; i++) {
        stars.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            opacity: Math.random() * 0.2,
            speed: 0.001 + Math.random() * 0.002,
        });
    }
}

// Add comet effect
function spawnComet() {
    const startX = Math.random() < 0.5 ? -50 : canvas.width + 50;
    const startY = Math.random() * canvas.height;
    const endX = startX < 0 ? canvas.width + 50 : -50;
    const endY = Math.random() * canvas.height;

    comets.push({
        x: startX,
        y: startY,
        dx: (endX - startX) / 50,
        dy: (endY - startY) / 50,
        life: 50,
    });

    setTimeout(spawnComet, Math.random() * (13000 - 7000) + 7000);
}

// Draw the canvas
function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw stars
    stars.forEach((star) => {
        ctx.fillStyle = `rgba(255, 255, 255, ${star.opacity})`;
        ctx.beginPath();
        ctx.arc(star.x, star.y, circleRadius, 0, Math.PI * 2);
        ctx.fill();

        star.opacity += star.speed;
        if (star.opacity > 0.2 || star.opacity < 0) {
            star.speed *= -1;
        }
    });

    // Draw comets
    comets.forEach((comet, index) => {
        ctx.beginPath();
        const gradient = ctx.createLinearGradient(
            comet.x,
            comet.y,
            comet.x - comet.dx * 10,
            comet.y - comet.dy * 10
        );
        gradient.addColorStop(0, "rgba(255, 255, 255, 1)");
        gradient.addColorStop(1, "rgba(255, 255, 255, 0)");
        ctx.fillStyle = gradient;

        ctx.arc(comet.x, comet.y, 4, 0, Math.PI * 2);
        ctx.fill();

        comet.x += comet.dx;
        comet.y += comet.dy;
        comet.life -= 1;

        if (comet.life <= 0) {
            comets.splice(index, 1);
        }
    });

    // Draw hover effect
    circles.forEach((circle) => {
        const distance = Math.hypot(mouseX - circle.x, mouseY - circle.y);
        if (isMouseMoving && distance < diameter * 4) {
            const intensity = Math.max(0.2, 1 - distance / (diameter * 4));
            circle.opacity = Math.min(0.6, circle.opacity + intensity * 0.1);
            circle.glow = Math.min(1, circle.glow + intensity * 0.15);
        }

        if (circle.glow > 0) {
            const gradient = ctx.createRadialGradient(
                circle.x,
                circle.y,
                circleRadius,
                circle.x,
                circle.y,
                circleRadius * 8
            );
            gradient.addColorStop(0, `rgba(255, 255, 255, ${circle.glow * 0.4})`);
            gradient.addColorStop(1, "rgba(255, 255, 255, 0)");
            ctx.fillStyle = gradient;

            ctx.beginPath();
            ctx.arc(circle.x, circle.y, circleRadius * 8, 0, Math.PI * 2);
            ctx.fill();
        }

        ctx.fillStyle = `rgba(255, 255, 255, ${circle.opacity})`;
        ctx.beginPath();
        ctx.arc(circle.x, circle.y, circleRadius, 0, Math.PI * 2);
        ctx.fill();

        circle.opacity = Math.max(0, circle.opacity - 0.01);
        circle.glow = Math.max(0, circle.glow - 0.02);
    });

    isMouseMoving = false;
}

// Handle mouse events
canvas.addEventListener("mousemove", (event) => {
    const rect = canvas.getBoundingClientRect();
    mouseX = event.clientX - rect.left;
    mouseY = event.clientY - rect.top;
    isMouseMoving = true;
});

canvas.addEventListener("mouseleave", () => {
    mouseX = -1;
    mouseY = -1;
});

// Animation loop
function animate() {
    draw();
    requestAnimationFrame(animate);
}

// Initialize
resizeCanvas();
spawnComet();
animate();

// Fade in the canvas after a short delay
setTimeout(() => {
    canvas.style.opacity = 1;
}, 100);

window.addEventListener("resize", resizeCanvas);
