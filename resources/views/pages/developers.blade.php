  <style>
    :root {
      --primary-color: #E89922;
      --secondary-color: #2c3e50;
      /* --accent-color: #e74c3c; */
      --light-color: #ecf0f1;
      --dark-color: #2c3e50;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      color: var(--dark-color);
    }

    .developers-section {
      padding: 60px 0;
      position: relative;
    }

    .section-header {
      position: relative;
      margin-bottom: 2.5rem;
      text-align: center;
    }

    .section-header h2 {
      font-weight: 700;
      color: var(--secondary-color);
      font-size: 2rem;
      margin-bottom: 0.8rem;
    }

    .section-header p {
      color: #666;
      font-size: 1rem;
      max-width: 600px;
      margin: 0 auto;
    }

    .section-header::after {
      content: '';
      position: absolute;
      bottom: -12px;
      left: 50%;
      transform: translateX(-50%);
      width: 70px;
      height: 3px;
      background: var(--primary-color);
    }

    .developer-card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
      overflow: hidden;
      margin: 0 10px;
      background: white;
      width: 280px;
    }

    .developer-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    }

    .img-container {
      position: relative;
      height: 160px;
      overflow: hidden;
    }

    .developer-img {
      height: 100%;
      width: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .developer-card:hover .developer-img {
      transform: scale(1.03);
    }

    .developer-role {
      position: absolute;
      top: 15px;
      right: 0;
      background-color: var(--primary-color);
      color: white;
      padding: 4px 12px;
      border-radius: 20px 0 0 20px;
      font-size: 0.75rem;
      font-weight: 600;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      padding: 15px;
    }

    .developer-name {
      font-weight: 700;
      color: var(--secondary-color);
      margin-bottom: 0.8rem;
      font-size: 1.1rem;
    }

    .developer-bio {
      color: #666;
      margin-bottom: 1rem;
      font-size: 0.8rem;
      line-height: 1.5;
    }

    .developer-skills {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-bottom: 1rem;
    }

    .skill-tag {
      background-color: #f0f7ff;
      color: var(--primary-color);
      padding: 3px 8px;
      border-radius: 15px;
      font-size: 0.7rem;
      font-weight: 500;
    }

    .btn-container {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
    }

    .btn-hire {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 5px 12px;
      border-radius: 20px;
      font-weight: 600;
      font-size: 0.75rem;
      transition: all 0.3s;
      white-space: nowrap;
    }

    .btn-hire:hover {
      background-color: #2980b9;
      transform: translateY(-2px);
      box-shadow: 0 3px 10px rgba(41, 128, 185, 0.3);
    }

    .btn-portfolio {
      background-color: white;
      color: var(--primary-color);
      border: 1px solid var(--primary-color);
      padding: 5px 12px;
      border-radius: 20px;
      font-weight: 600;
      font-size: 0.75rem;
      transition: all 0.3s;
      white-space: nowrap;
    }

    .btn-portfolio:hover {
      background-color: var(--primary-color);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 3px 10px rgba(41, 128, 185, 0.3);
    }

    /* Custom carousel styling */
    .carousel-container {
      position: relative;
    }

    .carousel-inner {
      overflow: hidden;
      padding: 20px 0;
    }

    .carousel-item {
      display: flex;
      transition: transform 0.6s ease-in-out;
    }

    .carousel-item.active {
      display: flex;
    }

    /* Navigation controls */
    .carousel-control-prev,
    .carousel-control-next {
      width: 35px;
      height: 35px;
      background-color: var(--primary-color);
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
      opacity: 1;
      transition: all 0.3s;
    }

    .carousel-control-prev {
      left: -15px;
    }

    .carousel-control-next {
      right: -15px;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
      background-color: var(--secondary-color);
    }

    /* Hide controls when not needed */
    .carousel-control-prev.hidden,
    .carousel-control-next.hidden {
      display: none;
    }

    /* Animation for cards */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(15px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .developer-card {
      animation: fadeIn 0.5s ease-out;
    }

    /* Responsive adjustments */
    @media (max-width: 991.98px) {
      .img-container {
        height: 140px;
      }
    }

    @media (max-width: 767.98px) {
      .developers-section {
        padding: 50px 0;
      }

      .section-header h2 {
        font-size: 1.8rem;
      }

      .carousel-control-prev,
      .carousel-control-next {
        width: 30px;
        height: 30px;
      }

      .carousel-control-prev {
        left: 0;
      }

      .carousel-control-next {
        right: 0;
      }

      .developer-card {
        width: 240px;
      }
    }

    @media (max-width: 575.98px) {
      .img-container {
        height: 130px;
      }

      .card-body {
        padding: 12px;
      }

      .btn-hire,
      .btn-portfolio {
        padding: 4px 10px;
        font-size: 0.7rem;
      }

      .developer-card {
        width: 220px;
      }
    }
  </style>
  <section class="developers-section" id="developer">
    <div class="container">
      <div class="section-header">
        <h2>Our Expert Developers</h2>
        <p>Meet the talented professionals who bring your digital visions to life</p>
      </div>

      <div class="carousel-container">
        <div id="developersCarousel" class="carousel slide" data-bs-ride="false">
          <div class="carousel-inner">
            <!-- Single active carousel item containing all cards -->
            <div class="carousel-item active">
              <div class="d-flex">
                <!-- Card 1 -->
                @foreach ($sectionEight as $sec)
                <div class="developer-card">
                  <div class="img-container">
                    <img src="{{ asset('storage/'.$sec->image) }}" class="developer-img" alt="John Carter">
                    <span class="developer-role">{{ $sec->role }}</span>
                  </div>
                  <div class="card-body">
                    <h3 class="developer-name">{{ $sec->name }}</h3>
                    <p class="developer-bio">{{ \Illuminate\Support\Str::limit($sec->description, 130)   }}</p>
                    <div class="developer-skills">
                      @if ($sec->tech1)
                      <span class="skill-tag">{{ $sec->tech1 }}</span>
                      @endif
                      @if ($sec->tech2)
                      <span class="skill-tag">{{ $sec->tech2 }}</span>
                      @endif
                      @if($sec->tech3)
                      <span class="skill-tag">{{ $sec->tech3 }}</span>
                      @endif
                      @if($sec->tech4)
                      <span class="skill-tag">{{ $sec->tech4 }}</span>
                      @endif
                    </div>
                    <div class="btn-container">
                      <button class="btn-hire">Hire Now</button>
                      <a href="{{ route('developer.portfolio.view') }}">
                        <button class="btn-portfolio">Portfolio</button>
                      </a>
                    </div>
                  </div>
                </div>
                @endforeach


              </div>
            </div>
          </div>

          <!-- Navigation controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#developersCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#developersCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // This script only handles the dynamic behavior, not rendering
    document.addEventListener('DOMContentLoaded', function() {
      const carousel = document.getElementById('developersCarousel');
      const prevBtn = carousel.querySelector('.carousel-control-prev');
      const nextBtn = carousel.querySelector('.carousel-control-next');
      const carouselInner = carousel.querySelector('.carousel-inner');
      const carouselItem = carousel.querySelector('.carousel-item');
      const cards = carouselItem.querySelectorAll('.developer-card');

      // Calculate how many cards are visible
      function calculateVisibleCards() {
        const containerWidth = carouselInner.offsetWidth;
        const cardWidth = cards[0]?.offsetWidth + 20; // Include margin
        return Math.floor(containerWidth / cardWidth);
      }

      // Update navigation buttons based on scroll position
      function updateNavigation() {
        const scrollLeft = carouselInner.scrollLeft;
        const maxScroll = carouselInner.scrollWidth - carouselInner.offsetWidth;

        // Show/hide prev button
        if (scrollLeft <= 0) {
          prevBtn.classList.add('hidden');
        } else {
          prevBtn.classList.remove('hidden');
        }

        // Show/hide next button
        if (scrollLeft >= maxScroll - 10) { // 10px tolerance
          nextBtn.classList.add('hidden');
        } else {
          nextBtn.classList.remove('hidden');
        }
      }

      // Initialize
      updateNavigation();

      // Set up event listeners
      carouselInner.addEventListener('scroll', updateNavigation);

      // Custom carousel behavior
      const bsCarousel = new bootstrap.Carousel(carousel, {
        interval: false,
        wrap: false
      });

      // Override default behavior to scroll by card width
      prevBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const cardWidth = cards[0].offsetWidth + 20; // Include margin
        carouselInner.scrollBy({
          left: -cardWidth,
          behavior: 'smooth'
        });
      });

      nextBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const cardWidth = cards[0].offsetWidth + 20; // Include margin
        carouselInner.scrollBy({
          left: cardWidth,
          behavior: 'smooth'
        });
      });

      // Hide controls if all cards are visible
      if (carouselInner.scrollWidth <= carouselInner.offsetWidth) {
        prevBtn.classList.add('hidden');
        nextBtn.classList.add('hidden');
      }
    });
  </script>