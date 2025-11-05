@extends('includes.main')
@section('mainContent')
  <main class="main">
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Service Details</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <!-- Main Content Area -->
          <div class="col-lg-7">

            <!-- Hero Service Introduction -->
            <div class="service-hero" data-aos="fade-up" data-aos-delay="100">
              <div class="service-meta">
                <span class="service-category">Strategic Consulting</span>
                <span class="reading-time">5 min read</span>
              </div>
              <h1>Business Process Optimization</h1>
              <p class="service-description">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra.</p>
            </div>

            <!-- Service Visual -->
            <div class="service-visual" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('landingpage/assets/img/services/services-7.webp')}}" alt="Business Process Optimization" class="img-fluid">
            </div>

            <!-- Service Content -->
            <div class="service-narrative" data-aos="fade-up" data-aos-delay="300">
              <h3>Transform Your Operations</h3>
              <p>Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta.</p>

              <p>Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sollicitudin molestie malesuada.</p>

              <!-- Key Benefits Grid -->
              <div class="benefits-grid" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-card">
                  <div class="benefit-icon">
                    <i class="bi bi-lightning-charge"></i>
                  </div>
                  <h4>Efficiency Boost</h4>
                  <p>Curabitur arcu erat accumsan id imperdiet et porttitor at sem.</p>
                </div>

                <div class="benefit-card">
                  <div class="benefit-icon">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <h4>Risk Mitigation</h4>
                  <p>Pellentesque in ipsum id orci porta dapibus vestibulum ante ipsum.</p>
                </div>

                <div class="benefit-card">
                  <div class="benefit-icon">
                    <i class="bi bi-graph-up"></i>
                  </div>
                  <h4>Growth Acceleration</h4>
                  <p>Vivamus suscipit tortor eget felis porttitor volutpat mauris blandit.</p>
                </div>

                <div class="benefit-card">
                  <div class="benefit-icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <h4>Team Alignment</h4>
                  <p>Donec rutrum congue leo eget malesuada vivamus magna justo lacinia.</p>
                </div>
              </div>

            </div>

            <!-- Implementation Timeline -->
            <div class="timeline-section" data-aos="fade-up" data-aos-delay="500">
              <h3>Implementation Journey</h3>
              <div class="timeline">
                <div class="timeline-item">
                  <div class="timeline-marker">
                    <span>1</span>
                  </div>
                  <div class="timeline-content">
                    <h4>Discovery &amp; Assessment</h4>
                    <p>Comprehensive analysis of current processes and identification of optimization opportunities.</p>
                    <small>Week 1-2</small>
                  </div>
                </div>

                <div class="timeline-item">
                  <div class="timeline-marker">
                    <span>2</span>
                  </div>
                  <div class="timeline-content">
                    <h4>Strategic Planning</h4>
                    <p>Development of customized optimization roadmap with clear milestones and success metrics.</p>
                    <small>Week 3-4</small>
                  </div>
                </div>

                <div class="timeline-item">
                  <div class="timeline-marker">
                    <span>3</span>
                  </div>
                  <div class="timeline-content">
                    <h4>Implementation</h4>
                    <p>Systematic rollout of process improvements with continuous monitoring and adjustment.</p>
                    <small>Week 5-12</small>
                  </div>
                </div>

                <div class="timeline-item">
                  <div class="timeline-marker">
                    <span>4</span>
                  </div>
                  <div class="timeline-content">
                    <h4>Optimization &amp; Scale</h4>
                    <p>Fine-tuning of implemented solutions and preparation for organization-wide scaling.</p>
                    <small>Week 13-16</small>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- End Main Content -->

          <!-- Service Sidebar -->
          <div class="col-lg-5">
            <div class="service-sidebar" data-aos="fade-up" data-aos-delay="200">

             <!-- Consultation Form -->
             <div class="consultation-form">
                <div class="form-header">
                  <h4>Schedule Consultation</h4>
                  <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                </div>

                <form action="forms/consultation.php" method="post" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-input" placeholder="Full Name" required="">
                  </div>

                  <div class="form-group">
                    <input type="email" name="email" class="form-input" placeholder="Email Address" required="">
                  </div>

                  <div class="form-group">
                    <input type="tel" name="phone" class="form-input" placeholder="Phone Number">
                  </div>

                  <input type="hidden" name="subject" value="Business Process Optimization Consultation">

                  <div class="form-group">
                    <textarea name="message" class="form-input" rows="4" placeholder="Tell us about your current challenges and goals..." required=""></textarea>
                  </div>

                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your consultation request has been sent. Thank you!</div>

                  <button type="submit" class="btn-consultation">
                    <span>Book Free Consultation</span>
                    <i class="bi bi-arrow-right"></i>
                  </button>
                </form>
              </div>

              <!-- Client Success Story -->
              <div id="successStoryCarousel" class="carousel slide success-story" data-bs-ride="carousel" data-bs-interval="5000">
  
  <div class="carousel-inner">

    <!-- Testimonial 1 -->
    <div class="carousel-item active">
      <div class="story-quote">
        <p>"Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas."</p>
      </div>
      <div class="story-author">
        <img src="{{ asset('landingpage/assets/img/person/person-m-8.webp') }}" alt="Michael Chen" class="author-avatar">
        <div class="author-details">
          <h5>Michael Chen</h5>
          <span>Operations Director</span>
          <small>TechCorp Industries</small>
        </div>
      </div>
      <div class="story-metrics">
        <div class="metric">
          <span class="metric-value">45%</span>
          <span class="metric-label">Cost Reduction</span>
        </div>
        <div class="metric">
          <span class="metric-value">3x</span>
          <span class="metric-label">Speed Increase</span>
        </div>
      </div>
    </div>

    <!-- Testimonial 2 -->
    <div class="carousel-item">
      <div class="story-quote">
        <p>"The Devnestic team completely transformed our workflow! Amazing collaboration and results beyond expectations."</p>
      </div>
      <div class="story-author">
        <img src="{{ asset('landingpage/assets/img/person/person-f-2.webp') }}" alt="Sarah Johnson" class="author-avatar">
        <div class="author-details">
          <h5>Sarah Johnson</h5>
          <span>Project Manager</span>
          <small>InnovateX Solutions</small>
        </div>
      </div>
      <div class="story-metrics">
        <div class="metric">
          <span class="metric-value">60%</span>
          <span class="metric-label">Productivity Boost</span>
        </div>
        <div class="metric">
          <span class="metric-value">2x</span>
          <span class="metric-label">Faster Delivery</span>
        </div>
      </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="carousel-item">
      <div class="story-quote">
        <p>"Highly professional and detail-oriented team. Our operations became smoother within weeks."</p>
      </div>
      <div class="story-author">
        <img src="{{ asset('landingpage/assets/img/person/person-m-4.webp') }}" alt="David Lee" class="author-avatar">
        <div class="author-details">
          <h5>David Lee</h5>
          <span>Head of Operations</span>
          <small>BrightTech Inc.</small>
        </div>
      </div>
      <div class="story-metrics">
        <div class="metric">
          <span class="metric-value">50%</span>
          <span class="metric-label">Efficiency Gain</span>
        </div>
        <div class="metric">
          <span class="metric-value">4x</span>
          <span class="metric-label">ROI Growth</span>
        </div>
      </div>
    </div>

  </div>

  <!-- Carousel Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#successStoryCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#successStoryCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>
            </div>
          </div><!-- End Sidebar -->

        </div>

      </div>

    </section><!-- /Service Details Section -->
  </main>
@endsection

<style>
  .success-story {
  text-align: center;
  padding: 20px;
  border-radius: 15px;
  background: #f8f9fa;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}
.success-story img {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin-top: 15px;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: #000;
  border-radius: 50%;
  padding: 10px;
}

</style>