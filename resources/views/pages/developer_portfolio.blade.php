<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --text-color: #333;
            --text-light: #7f8c8d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: var(--text-color);
            line-height: 1.6;
        }

        .portfolio-container {
            max-width: 1200px;
            margin: 2rem auto;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .portfolio-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-align: center;
            position: relative;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 1.5rem;
        }

        .employee-name {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .employee-title {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 1.5rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .social-links a {
            color: white;
            font-size: 1.2rem;
            transition: transform 0.3s;
        }

        .social-links a:hover {
            transform: translateY(-3px);
        }

        .portfolio-content {
            display: flex;
            flex-wrap: wrap;
        }

        .main-content {
            flex: 1;
            min-width: 300px;
            padding: 2rem;
        }

        .sidebar {
            width: 300px;
            padding: 2rem;
            background-color: var(--light-color);
        }

        .section {
            margin-bottom: 2.5rem;
        }

        .section-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--secondary-color);
            position: relative;
            padding-bottom: 0.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .about-text {
            margin-bottom: 1.5rem;
        }

        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .skill-item {
            background-color: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .experience-item,
        .education-item {
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
        }

        .experience-item:last-child,
        .education-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .item-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .item-subtitle {
            color: var(--text-light);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .item-date {
            color: var(--primary-color);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .item-description {
            font-size: 0.95rem;
        }

        .contact-info {
            margin-bottom: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .contact-icon {
            margin-right: 1rem;
            color: var(--primary-color);
            font-size: 1.2rem;
            width: 20px;
            text-align: center;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .project-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .project-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .project-info {
            padding: 1.2rem;
        }

        .project-title {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
        }

        .project-description {
            font-size: 0.9rem;
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .project-tag {
            background-color: var(--light-color);
            color: var(--text-color);
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            justify-content: center;
        }

        .btn {
            padding: 0.8rem 2rem;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
            text-align: center;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
            border: 2px solid var(--primary-color);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--primary-color);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-secondary:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 */
            height: 0;
            overflow: hidden;
            margin: 1.5rem 0;
            border-radius: 8px;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .feature-list {
            margin: 1rem 0 1.5rem 1.5rem;
        }

        .feature-list li {
            margin-bottom: 0.5rem;
        }

        @media (max-width: 768px) {
            .portfolio-content {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .employee-name {
                font-size: 2rem;
            }

            .action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 250px;
            }
        }
    </style>
</head>

<body>
    <div class="portfolio-container" id="portfolioPage">
        <div class="portfolio-header">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe" class="profile-image">
            <h1 class="employee-name">John Doe</h1>
            <p class="employee-title">Senior Full Stack Developer</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-stack-overflow"></i></a>
            </div>
        </div>

        <div class="portfolio-content">
            <div class="main-content">
                <section class="section">
                    <h2 class="section-title">About Me</h2>
                    <div class="about-text">
                        <p>I'm a passionate full-stack developer with over 8 years of experience building web applications. I specialize in JavaScript technologies including React, Node.js, and Express. I love creating efficient, scalable, and user-friendly solutions to complex problems.</p>

                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <p>My development philosophy centers around:</p>
                        <ul class="feature-list">
                            <li>Clean, maintainable code with thorough documentation</li>
                            <li>Performance optimization and efficient algorithms</li>
                            <li>Responsive design and mobile-first approach</li>
                            <li>Secure coding practices and data protection</li>
                            <li>Continuous learning and adopting new technologies</li>
                        </ul>
                    </div>
                </section>

                <section class="section">
                    <h2 class="section-title">Experience</h2>
                    <div class="experience-item">
                        <h3 class="item-title">Lead Developer</h3>
                        <p class="item-subtitle">Tech Solutions Inc.</p>
                        <p class="item-date">January 2020 - Present</p>
                        <p class="item-description">Leading a team of 5 developers to build enterprise-level web applications. Responsibilities include architecture design, code reviews, mentoring junior developers, and implementing CI/CD pipelines.</p>
                    </div>
                    <div class="experience-item">
                        <h3 class="item-title">Senior Web Developer</h3>
                        <p class="item-subtitle">Digital Creations Agency</p>
                        <p class="item-date">March 2017 - December 2019</p>
                        <p class="item-description">Developed custom web solutions for clients across various industries. Worked closely with designers to implement pixel-perfect UIs while ensuring optimal performance and accessibility.</p>
                    </div>
                </section>

                <section class="section">
                    <h2 class="section-title">Latest Projects</h2>
                    <div class="projects-grid">
                        <div class="project-card">
                            <img src="https://source.unsplash.com/random/600x400/?web,design" alt="E-commerce Platform" class="project-image">
                            <div class="project-info">
                                <h3 class="project-title">E-commerce Platform</h3>
                                <p class="project-description">A full-featured online store with payment integration, inventory management, and analytics dashboard.</p>
                                <div class="project-tags">
                                    <span class="project-tag">React</span>
                                    <span class="project-tag">Node.js</span>
                                    <span class="project-tag">MongoDB</span>
                                </div>
                            </div>
                        </div>
                        <div class="project-card">
                            <img src="https://source.unsplash.com/random/600x400/?app,ui" alt="Task Management App" class="project-image">
                            <div class="project-info">
                                <h3 class="project-title">Task Management App</h3>
                                <p class="project-description">Collaborative project management tool with real-time updates, kanban boards, and team messaging.</p>
                                <div class="project-tags">
                                    <span class="project-tag">Vue.js</span>
                                    <span class="project-tag">Firebase</span>
                                    <span class="project-tag">WebSockets</span>
                                </div>
                            </div>
                        </div>
                        <div class="project-card">
                            <img src="https://source.unsplash.com/random/600x400/?data,analytics" alt="Data Visualization Dashboard" class="project-image">
                            <div class="project-info">
                                <h3 class="project-title">Data Visualization Dashboard</h3>
                                <p class="project-description">Interactive dashboard for analyzing and visualizing complex datasets with customizable reports.</p>
                                <div class="project-tags">
                                    <span class="project-tag">D3.js</span>
                                    <span class="project-tag">Python</span>
                                    <span class="project-tag">Flask</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="sidebar">
                <section class="section">
                    <h2 class="section-title">Skills</h2>
                    <div class="skills-container">
                        <span class="skill-item">JavaScript</span>
                        <span class="skill-item">React</span>
                        <span class="skill-item">Node.js</span>
                        <span class="skill-item">TypeScript</span>
                        <span class="skill-item">HTML/CSS</span>
                        <span class="skill-item">MongoDB</span>
                        <span class="skill-item">PostgreSQL</span>
                        <span class="skill-item">Docker</span>
                        <span class="skill-item">AWS</span>
                        <span class="skill-item">Git</span>
                        <span class="skill-item">REST APIs</span>
                        <span class="skill-item">GraphQL</span>
                    </div>
                </section>

                <section class="section">
                    <h2 class="section-title">Education</h2>
                    <div class="education-item">
                        <h3 class="item-title">Master of Computer Science</h3>
                        <p class="item-subtitle">Stanford University</p>
                        <p class="item-date">2014 - 2016</p>
                    </div>
                    <div class="education-item">
                        <h3 class="item-title">Bachelor of Software Engineering</h3>
                        <p class="item-subtitle">MIT</p>
                        <p class="item-date">2010 - 2014</p>
                    </div>
                </section>

                <section class="section">
                    <h2 class="section-title">Contact</h2>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                            <span>john.doe@example.com</span>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-phone"></i></div>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <span>San Francisco, CA</span>
                        </div>
                    </div>
                </section>

                <div class="action-buttons">
                    <a href="#" class="btn btn-primary" id="hireButton">Hire Me</a>
                    <a href="#" class="btn btn-secondary" id="backButton">Back to Team</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // This would be connected to your carousel in the real implementation
            const hireButton = document.getElementById('hireButton');
            const backButton = document.getElementById('backButton');

            hireButton.addEventListener('click', function(e) {
                e.preventDefault();
                alert('Hire request sent! We will contact you shortly.');
                // In a real app, this would trigger a form or API call
            });

            backButton.addEventListener('click', function(e) {
                e.preventDefault();
                // This would navigate back to the carousel in the real implementation
                alert('Navigating back to team carousel');
                // window.history.back() or similar navigation
            });

            // This simulates loading the portfolio from a carousel card click
            console.log('Portfolio page loaded for employee: John Doe');

            // In a real implementation, you would:
            // 1. Receive employee data from the carousel click
            // 2. Dynamically populate this template with that data
            // 3. Possibly use a router to handle the navigation
        });
    </script>
</body>

</html>