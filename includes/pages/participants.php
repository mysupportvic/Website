<?php
// Participants page template
?>

<div id="participants-content">
  <div class="participants-page">
    <!-- HERO SECTION -->
    <section style="background: linear-gradient(135deg, #1D9E75 0%, #085041 100%); color: white; padding: 100px 20px; text-align: center; position: relative; overflow: hidden;">
      <div style="max-width: 800px; margin: 0 auto; position: relative; z-index: 1;">
        <h1 style="font-size: 48px; margin: 0 0 20px; font-weight: 700; line-height: 1.2;">Getting Quality Home Support is Simple</h1>
        <p style="font-size: 18px; margin: 0; opacity: 0.95; line-height: 1.6;">We make it easy to access the care you need. Here's how it works.</p>
      </div>
    </section>

    <!-- WHO WE SUPPORT -->
    <section style="max-width: 1100px; margin: 80px auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 60px;">
        <h2 style="font-size: 36px; color: var(--color-custom-gray); margin-bottom: 15px;">Who We Support</h2>
        <p style="font-size: 16px; color: var(--color-muted); line-height: 1.6;">We provide home support services for seniors in <?= e($site['region']) ?></p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">
        <div style="background: linear-gradient(135deg, #E1F5EE 0%, #F0F8F6 100%); padding: 30px; border-radius: 12px; border-left: 4px solid #1D9E75;">
          <div style="font-size: 28px; color: #1D9E75; margin-bottom: 12px;">👥</div>
          <h3 style="color: var(--color-custom-gray); margin: 0 0 10px; font-size: 16px;">Seniors Aged 65+</h3>
          <p style="color: var(--color-muted); margin: 0; line-height: 1.6;">Or younger individuals with mobility or health support needs.</p>
        </div>

        <div style="background: linear-gradient(135deg, #E1F5EE 0%, #F0F8F6 100%); padding: 30px; border-radius: 12px; border-left: 4px solid #1D9E75;">
          <div style="font-size: 28px; color: #1D9E75; margin-bottom: 12px;">🏠</div>
          <h3 style="color: var(--color-custom-gray); margin: 0 0 10px; font-size: 16px;">Living Independently</h3>
          <p style="color: var(--color-muted); margin: 0; line-height: 1.6;">People who want to stay home but need support with daily tasks.</p>
        </div>

        <div style="background: linear-gradient(135deg, #E1F5EE 0%, #F0F8F6 100%); padding: 30px; border-radius: 12px; border-left: 4px solid #1D9E75;">
          <div style="font-size: 28px; color: #1D9E75; margin-bottom: 12px;">💪</div>
          <h3 style="color: var(--color-custom-gray); margin: 0 0 10px; font-size: 16px;">Need Practical Help</h3>
          <p style="color: var(--color-muted); margin: 0; line-height: 1.6;">Seeking assistance with household tasks, companionship, or wellness support.</p>
        </div>
      </div>
    </section>

    <!-- SERVICES SECTION -->
    <section style="background: var(--color-warm-bg); padding: 80px 20px; margin: 60px 0;">
      <div style="max-width: 1100px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 60px;">
          <h2 style="font-size: 36px; color: var(--color-custom-gray); margin-bottom: 15px;">Services We Provide</h2>
          <p style="font-size: 16px; color: var(--color-muted); line-height: 1.6;">Comprehensive home support tailored to your unique needs</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
          <?php foreach (array_slice($site['services'], 0, 3) as $service): ?>
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); transition: all 0.3s ease; border-top: 4px solid #1D9E75; text-align: center;">
              <i class="ti <?= e($service['icon']) ?>" style="font-size: 36px; color: #1D9E75; margin-bottom: 20px; display: block;"></i>
              <h3 style="color: var(--color-custom-gray); margin: 0 0 12px; font-size: 18px; font-weight: 600;"><?= e($service['title']) ?></h3>
              <p style="color: var(--color-muted); margin: 0; line-height: 1.6;"><?= e($service['short']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- GETTING STARTED SECTION -->
    <section style="max-width: 1100px; margin: 80px auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 60px;">
        <h2 style="font-size: 36px; color: var(--color-custom-gray); margin-bottom: 15px;">Getting Started is Easy</h2>
        <p style="font-size: 16px; color: var(--color-muted); line-height: 1.6;">Four simple steps to get the care support you need</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 30px;">
        <?php foreach ($site['steps'] as $idx => $step): ?>
          <div style="text-align: center;">
            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #1D9E75 0%, #0f7667 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 28px; margin: 0 auto 20px; box-shadow: 0 4px 15px rgba(29, 158, 117, 0.3);">
              <?= e($step['num']) ?>
            </div>
            <h3 style="color: var(--color-custom-gray); margin: 0 0 12px; font-size: 18px; font-weight: 600;"><?= e($step['title']) ?></h3>
            <p style="color: var(--color-muted); margin: 0; line-height: 1.6; font-size: 14px;"><?= e($step['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Connector lines (visual guide) -->
      <div style="display: none; margin-top: 40px; text-align: center; color: var(--color-muted); font-size: 24px;">
        ↓ ↓ ↓ ↓
      </div>
    </section>

    <!-- FAQ SECTION -->
    <section style="background: linear-gradient(135deg, #f5f5f5 0%, #fafafa 100%); padding: 80px 20px; margin: 60px 0;">
      <div style="max-width: 800px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 60px;">
          <h2 style="font-size: 36px; color: var(--color-custom-gray); margin-bottom: 15px;">Frequently Asked Questions</h2>
          <p style="font-size: 16px; color: var(--color-muted);">Find answers to common questions about our services</p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px;">
          <div style="background: white; border-radius: 8px; overflow: hidden; border: 1px solid #e0e0e0; transition: all 0.3s ease;">
            <div style="padding: 20px; background: #f9f9f9; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;" onclick="this.parentElement.querySelector('[data-answer]').style.display = this.parentElement.querySelector('[data-answer]').style.display === 'none' ? 'block' : 'none'; this.parentElement.classList.toggle('active');">
              <h4 style="margin: 0; color: var(--color-custom-gray); font-weight: 600;">How much does home support cost?</h4>
              <i class="ti ti-chevron-down" style="color: #1D9E75; transition: transform 0.3s;"></i>
            </div>
            <div data-answer style="padding: 20px; display: none; color: var(--color-muted); line-height: 1.8;">
              Pricing depends on the services you need and how often. We provide a quote during your assessment. Our rates are transparent with no hidden fees.
            </div>
          </div>

          <div style="background: white; border-radius: 8px; overflow: hidden; border: 1px solid #e0e0e0; transition: all 0.3s ease;">
            <div style="padding: 20px; background: #f9f9f9; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;" onclick="this.parentElement.querySelector('[data-answer]').style.display = this.parentElement.querySelector('[data-answer]').style.display === 'none' ? 'block' : 'none'; this.parentElement.classList.toggle('active');">
              <h4 style="margin: 0; color: var(--color-custom-gray); font-weight: 600;">Are your carers trained and vetted?</h4>
              <i class="ti ti-chevron-down" style="color: #1D9E75; transition: transform 0.3s;"></i>
            </div>
            <div data-answer style="padding: 20px; display: none; color: var(--color-muted); line-height: 1.8;">
              Yes! All carers are carefully selected, background checked, insured, and trained in aged care and safety practices.
            </div>
          </div>

          <div style="background: white; border-radius: 8px; overflow: hidden; border: 1px solid #e0e0e0; transition: all 0.3s ease;">
            <div style="padding: 20px; background: #f9f9f9; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;" onclick="this.parentElement.querySelector('[data-answer]').style.display = this.parentElement.querySelector('[data-answer]').style.display === 'none' ? 'block' : 'none'; this.parentElement.classList.toggle('active');">
              <h4 style="margin: 0; color: var(--color-custom-gray); font-weight: 600;">Can I choose my carer?</h4>
              <i class="ti ti-chevron-down" style="color: #1D9E75; transition: transform 0.3s;"></i>
            </div>
            <div data-answer style="padding: 20px; display: none; color: var(--color-muted); line-height: 1.8;">
              Absolutely. We match you with carers based on your preferences. You can meet them before deciding.
            </div>
          </div>

          <div style="background: white; border-radius: 8px; overflow: hidden; border: 1px solid #e0e0e0; transition: all 0.3s ease;">
            <div style="padding: 20px; background: #f9f9f9; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;" onclick="this.parentElement.querySelector('[data-answer]').style.display = this.parentElement.querySelector('[data-answer]').style.display === 'none' ? 'block' : 'none'; this.parentElement.classList.toggle('active');">
              <h4 style="margin: 0; color: var(--color-custom-gray); font-weight: 600;">What if I need to change my support schedule?</h4>
              <i class="ti ti-chevron-down" style="color: #1D9E75; transition: transform 0.3s;"></i>
            </div>
            <div data-answer style="padding: 20px; display: none; color: var(--color-muted); line-height: 1.8;">
              Your schedule is flexible. Let us know if your needs change and we'll adjust your plan accordingly.
            </div>
          </div>

          <div style="background: white; border-radius: 8px; overflow: hidden; border: 1px solid #e0e0e0; transition: all 0.3s ease;">
            <div style="padding: 20px; background: #f9f9f9; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;" onclick="this.parentElement.querySelector('[data-answer]').style.display = this.parentElement.querySelector('[data-answer]').style.display === 'none' ? 'block' : 'none'; this.parentElement.classList.toggle('active');">
              <h4 style="margin: 0; color: var(--color-custom-gray); font-weight: 600;">Do you service my area?</h4>
              <i class="ti ti-chevron-down" style="color: #1D9E75; transition: transform 0.3s;"></i>
            </div>
            <div data-answer style="padding: 20px; display: none; color: var(--color-muted); line-height: 1.8;">
              We service <?= e($site['region']) ?>. Call us on <?= e($site['phone']) ?> to confirm your location is covered.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA SECTION -->
    <section style="background: linear-gradient(135deg, #1D9E75 0%, #085041 100%); color: white; padding: 100px 20px; text-align: center; position: relative; overflow: hidden;">
      <div style="max-width: 700px; margin: 0 auto; position: relative; z-index: 1;">
        <h2 style="font-size: 40px; margin: 0 0 20px; font-weight: 700; line-height: 1.2;">Ready to Get Quality Home Support?</h2>
        <p style="font-size: 18px; margin: 0 0 30px; opacity: 0.95; line-height: 1.6;">Contact us today for a free, no-obligation assessment. We'll discuss your needs and create a care plan tailored for you.</p>
        <a href="<?= e($routes['contact']) ?>" style="display: inline-block; background: white; color: #1D9E75; padding: 14px 40px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 16px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">Get Started Today</a>
        <div style="margin-top: 20px; font-size: 16px; opacity: 0.9;">
          or call us at <strong><?= e($site['phone']) ?></strong>
        </div>
      </div>
    </section>
  </div>
</div>
