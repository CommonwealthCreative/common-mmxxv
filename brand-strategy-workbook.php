<?php
/**
 * Template Name: Brand Strategy Workbook
 * @package The_Commonwealth_Theme_MMXXV
 */

get_header();
?>

<style>
  .site-footer { display: none; }
  #workbook { min-height: 100vh; }

  .progress-bar-container { margin-bottom: 2rem; }

  .progress-bar-track {
    height: 24px;
    background: #ddd;
    border-radius: 50px;
    overflow: hidden;
    position: relative;
  }

  .progress-bar-fill {
    height: 100%;
    width: 0%;
    background: repeating-linear-gradient(45deg, #5bdeb8, #5bdeb8 10px, #a4f9c8 10px, #a4f9c8 20px);
    border-radius: 50px;
    transition: width 0.4s ease;

  }
.progress-percent {
  text-align: center;
  font-size: 0.9rem;
  margin-bottom: 0.25rem;
  color: #5bdeb8;
}


</style>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = 'accounts@thecommonwealthcreative.com';
  $subject = 'New Brand Strategy Workbook Submission';
  $headers = ['Content-Type: text/plain; charset=UTF-8'];

  $message = '';
  foreach ($_POST as $key => $value) {
    $message .= ucfirst($key) . ":\n" . trim($value) . "\n\n";
  }

  wp_mail($to, $subject, $message, $headers);

  echo "<script>
    document.addEventListener('DOMContentLoaded', function () {
      const wrapper = document.querySelector('.workbook-form-wrapper');
      if (wrapper) {
        wrapper.innerHTML = `
          <div class='submission-message textcommon'>
            <h2>Thanks for starting your workbook!</h2>
            <p>We’ve received your answers and will review them shortly.</p>
          </div>
        `;
      }
    });
  </script>";
}
?>

<?php if ( is_user_logged_in() ) : ?>
<div id="workbook" class="commoncard bgworkbook">
  <div class="_1300 clear">
    <div class="workbook-start-form">
      <a class="pills center bgcommon"><span class="fa"></span>Need Some Help?</a>
      <h3 class="match1 textwhite">Brand Strategy Workbook</h3>
              <p class="textwhite">Complete the workbook online and we'll send you <em class="textcommon">a 15% off coupon code</em> your next Commonwealth Creative purchase.</p>
      <div class="w-layout-layout commonstack wf-layout-layout"></div>

      
<div class="workbook-form-wrapper">
  <div class="progress-percent">0%</div>
  <div class="progress-bar-container">
    <div class="progress-bar-track">
      <div class="progress-bar-fill"></div>
    </div>
  </div>

  <form id="workbook-form" method="POST" action="">
    <!-- Step 1 -->
    <div class="workbook-step" data-step="1">
      <label class="mid">
        The Metro doors are about to close—you have one sentence to shout what you do before the train departs! Make it clear, compelling, and impossible to ignore.
        <textarea name="q1" required placeholder="One unforgettable sentence…"></textarea>
      </label>
      <div class="form-message"></div>
    </div>
    <div class="workbook-button" data-button-step="1">
      <button type="button" class="next-button">Next Question</button>
    </div>

    <!-- Step 2 -->
    <div class="workbook-step" data-step="2" style="display:none;">
      <label class="mid">
        Now that you've shouted your message at a group of strangers, what key details do you wish you had included to make your message clearer, more compelling, and unforgettable?
        <textarea name="q2" required placeholder="I forgot to mention…"></textarea>
      </label>
      <div class="form-message"></div>
    </div>
    <div class="workbook-button" data-button-step="2" style="display:none;">
      <button type="button" class="next-button">Next Question</button>
    </div>

    <!-- Step 3 -->
    <div class="workbook-step" data-step="3" style="display:none;">
      <label class="mid">Let’s identify who else does what you do. List some direct competitors and indirect competitors.</label>
      <textarea name="q3_direct" required placeholder="Direct Competitors…"></textarea>
      <textarea name="q3_indirect" required placeholder="Indirect Competitors…"></textarea>
      <div class="commoncard bgdark"><p><span class="textcommon"><b> 
Let’s say you sell pizza. </b></span>Direct competitors are other pizza restaurants nearby. Indirect competitors are people selling hamburgers. <em class="">Direct competitors offer the same product or service as you, to the same audience. They’re solving the exact same problem in a similar way. Indirect competitors solve the same problem, but with a different product, service, or approach.</em></p></div>
      <div class="form-message"></div>
    </div>
    <div class="workbook-button" data-button-step="3" style="display:none;">
      <button type="button" class="next-button">Next Question</button>
    
    </div>

    <!-- Step 4 -->
    <div class="workbook-step" data-step="4" style="display:none;">
      <label class="mid">
        Imagine someone is telling a friend about your business. What would you hope they say?
        <textarea name="q4" required placeholder="Let me tell you…"></textarea>
      </label>
      <div class="form-message"></div>
    </div>
    <div class="workbook-button" data-button-step="4" style="display:none;">
      <button type="button" class="next-button">Next Question</button>
    </div>

    <!-- Step 5 -->
    <div class="workbook-step" data-step="5" style="display:none;">
      <label class="mid">
        You bring a wealth of experience to the table—but there’s something you do in a way no one else can. What’s that unique edge, that signature approach—your secret sauce?
        <textarea name="q5" required placeholder="I’m cookin’ with…"></textarea>
      </label>
      <div class="form-message"></div>
    </div>
    <div class="workbook-button" data-button-step="5" style="display:none;">
      <button type="button" class="next-button">Next Question</button>
    </div>

    <!-- Step 6 -->
    <div class="workbook-step" data-step="6" style="display:none;">
      <label class="mid">
        Imagine your brand as a person. Who are they? Get specific and creative. The more personality your brand has, the more memorable—and magnetic—it becomes.
        <textarea name="q6" required placeholder="And the main character…"></textarea>
      </label>
      <div class="form-message"></div>
    </div>
    <div class="workbook-button" data-button-step="6" style="display:none;">
      <button type="button" class="next-button">Next Question</button>
    </div>

    <!-- Step 7 -->
    <div class="workbook-step" data-step="7" style="display:none;">
      <label class="mid">
        What does your ideal customer care most about? What is their biggest pain point?
        <textarea name="q7" required placeholder="I can help you with…"></textarea>
      </label>
      <div class="form-message"></div>
    </div>
    <div class="workbook-button" data-button-step="7" style="display:none;">
      <button type="button" class="next-button">Next Question</button>
    </div>

    <!-- Step 8 -->
    <div class="workbook-step" data-step="8" style="display:none;">
      <label class="mid">
        What is the name of your business?
        <input type="text" name="q8" required placeholder="Your Business Name">
      </label>
      <div class="form-message"></div>
    </div>
    <div class="workbook-button" data-button-step="8" style="display:none;">
      <button type="submit">Complete Your Workbook</button>
    </div>
  </form>
</div>

      
    </div>
  </div>
</div>
<?php else : ?>
  <?php get_template_part('template-parts/workbook-form'); ?>
<?php endif; ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form         = document.getElementById('workbook-form');
  const percentLabel = document.querySelector('.progress-percent');
  const progressBar  = document.querySelector('.progress-bar-fill');
  if (!form || !percentLabel || !progressBar) return;

  const steps      = form.querySelectorAll('.workbook-step');
  const buttons    = form.querySelectorAll('.workbook-button');
  const totalSteps = steps.length;
  let   current    = 0;

  function showStep(idx) {
    // show only the current question
    steps.forEach((s,i) => s.style.display = i === idx ? 'block' : 'none');
    // show only the matching button container
    buttons.forEach((b,i) => {
      const active = i === idx;
      b.style.display = active ? 'flex' : 'none';
      b.classList.toggle('active', active);
      // reset layout classes
      b.classList.remove('layout-end','layout-center');
      if (active) {
        // last step = center, all others = end
        if (i === totalSteps - 1) {
          b.classList.add('layout-center');
        } else {
          b.classList.add('layout-end');
        }
      }
    });
    // update bar + percent
    const pct = 10 + (idx / (totalSteps - 1)) * 90;
    progressBar.style.width  = `${pct}%`;
    percentLabel.textContent = `${Math.round(pct)}%`;
  }

  // Next‐button only handlers
  buttons.forEach((group, i) => {
    const next = group.querySelector('.next-button');
    if (!next) return;
    next.addEventListener('click', () => {
      const field = steps[i].querySelector('textarea, input');
      const msg   = steps[i].querySelector('.form-message');
      msg.textContent = '';
      if (!field.value.trim()) {
        msg.textContent = 'Please answer this question before continuing.';
        msg.style.color = 'red';
        return;
      }
      current = i + 1;
      showStep(current);
    });
  });

  // on submit, validate & finish
  form.addEventListener('submit', function(e) {
    let valid = true;
    form.querySelectorAll('textarea, input').forEach(el => {
      if (el.required && !el.value.trim()) {
        const step = el.closest('.workbook-step');
        const msg  = step.querySelector('.form-message');
        msg.textContent = 'Please answer this question before submitting.';
        msg.style.color = 'red';
        showStep(parseInt(step.dataset.step,10) - 1);
        valid = false;
      }
    });
    if (!valid) {
      e.preventDefault();
    } else {
      progressBar.style.width  = '100%';
      percentLabel.textContent = '100%';
    }
  });

  // kick off
  showStep(current);
});
</script>

<?php get_footer(); ?>
