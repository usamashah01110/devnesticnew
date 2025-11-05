<!-- ===== Footer Section ===== -->
<footer class="footer">
    <div class="footer-container">
        <!-- Top Section -->
        <div class="footer-top">
            <!-- Left -->
            <div class="footer-left">
                <h2 class="footer-logo">Devnestic Solutions</h2>
                <p class="footer-desc">
                    We provide the expertise and support to propel your business forward.
                </p>
                <div class="footer-social">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Upwork-logo.svg" alt="Upwork">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/4b/Clutch_logo.png" alt="Clutch">
                </div>
            </div>

            <!-- Right -->
            <div class="footer-right">
                <h3>Let's get started on something great</h3>
                <p>
                    Our team of IT experts looks forward to meeting with you and providing valuable insights tailored to your business.
                </p>
                <a href="#" class="footer-btn">Get an appointment now</a>

            </div>
        </div>

        <!-- Bottom Section -->
        <div class="footer-bottom">
            <div class="footer-column">
                <h4>Services</h4>
                <ul>
                    <li>Web Development</li>
                    <li>CRM Integration</li>
                    <li>Digital Marketing</li>
                    <li>E-Commerce</li>
                    <li>Mobile App Development</li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Company</h4>
                <ul>
                    <li>About Us</li>
                    <li>Portfolio</li>
                    <li>Culture</li>
                    <li>Careers</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Contact</h4>
                <p><strong>Phone:</strong> +971-58-139-8933</p>
                <p><strong>Mail:</strong> sales@devsspace.com</p>
            </div>
        </div>
    </div>

    <div class="footer-copy">
        © 2025 Devsspace. All rights reserved.
    </div>
</footer>

<!-- ===== CSS ===== -->
<style>
    .footer {
        background: #101a20;
        color: #ccc;
        font-family: "Poppins", sans-serif;
        padding: 60px 0 20px;
    }

    .footer-container {
        width: 90%;
        max-width: 1200px;
        margin: auto;
    }

    .footer-top {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        border-bottom: 1px solid #222;
        padding-bottom: 40px;
        margin-bottom: 40px;
    }

    .footer-left {
        flex: 1 1 40%;
    }

    .footer-logo {
        color: #fff;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .footer-desc {
        color: #aaa;
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 25px;
    }

    .footer-social img {
        height: 26px;
        margin-right: 15px;
        opacity: 0.8;
        transition: 0.3s;
    }

    .footer-social img:hover {
        opacity: 1;
        transform: scale(1.1);
    }

    .footer-right {
        flex: 1 1 50%;
    }

    .footer-right h3 {
        color: #fff;
        font-size: 20px;
        margin-bottom: 10px;
    }

    .footer-right p {
        color: #aaa;
        font-size: 14px;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .footer-btn {
        background: #A3721E;
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 500;
        display: inline-block;
        margin-bottom: 25px;
        transition: background 0.3s;
    }

    .footer-btn:hover {
        background: #83570b;
        color:white;
    }

    .footer-stats {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }

    .footer-stats h4 {
        color: #fff;
        margin-bottom: 5px;
    }

    .footer-stats p {
        color: #999;
        font-size: 13px;
    }

    .footer-bottom {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .footer-column {
        flex: 1 1 30%;
        margin-bottom: 30px;
    }

    .footer-column h4 {
        color: #fff;
        font-size: 16px;
        margin-bottom: 15px;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
    }

    .footer-column ul li {
        margin-bottom: 8px;
        font-size: 14px;
        color: #aaa;
        cursor: pointer;
        transition: 0.3s;
    }

    .footer-column ul li:hover {
        color: #fff;
        transform: translateX(4px);
    }

    .footer-copy {
        text-align: center;
        font-size: 13px;
        color: #777;
        border-top: 1px solid #111;
        padding-top: 15px;
        margin-top: 30px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .footer-top,
        .footer-bottom {
            flex-direction: column;
        }
        .footer-right,
        .footer-left,
        .footer-column {
            flex: 1 1 100%;
        }
    }
</style>
