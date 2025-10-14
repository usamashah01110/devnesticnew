<style>
    .contact-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 80px 20px;
        background-color: #f8f9fa;
        min-height: 60vh;
    }

    .contact-section div {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .contact-section span {
        color: #0d6efd;
    }

    .contact-section p {
        font-size: 1.2rem;
        max-width: 600px;
        margin-bottom: 30px;
        color: #6c757d;
    }

    /* 🔹 Polished Professional Button */
    .contact-btn {
        position: relative;
        background: linear-gradient(135deg, #0d6efd, #0b5ed7);
        color: #fff;
        border: none;
        padding: 14px 38px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.05rem;
        letter-spacing: 0.5px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        transition: all 0.3s ease-in-out;
        overflow: hidden;
    }

    .contact-btn::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.15);
        transition: all 0.5s ease;
    }

    .contact-btn:hover::before {
        left: 100%;
    }

    .contact-btn:hover {
        background: linear-gradient(135deg, #0b5ed7, #094ab2);
        transform: translateY(-3px);
        box-shadow: 0 8px 18px rgba(13, 110, 253, 0.3);
    }

    .arrow-icon {
        background: #fff;
        color: #0d6efd;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .contact-btn:hover .arrow-icon {
        transform: translateX(5px);
        background: #fff;
        color: #0b5ed7;
    }
</style>
<section class="contact-section">
    <div>Let's talk about <span>what's next</span></div>
    <p>Rethink what your company can do with the right partner by your side.</p>
    <button class="contact-btn">
        Contact with us
        <span class="arrow-icon">→</span>
    </button>
</section>
