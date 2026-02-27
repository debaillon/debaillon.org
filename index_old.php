<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBAILLON, LLC - Technology Consulting & Digital Strategy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

```
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f5f5f5;
    }

    .header {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        text-align: center;
        padding: 3rem 2rem;
        font-weight: bold;
        font-size: 3rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .tagline {
        font-size: 1.2rem;
        font-weight: normal;
        margin-top: 0.5rem;
        opacity: 0.95;
    }

    .container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        min-height: calc(100vh - 180px);
        gap: 0;
        max-width: 1400px;
        margin: 0 auto;
    }

    .quadrant {
        padding: 2.5rem;
        background-color: white;
        border: 1px solid #e0e0e0;
    }

    .quadrant h2 {
        margin-bottom: 1.5rem;
        color: #1e3c72;
        border-bottom: 3px solid #2a5298;
        padding-bottom: 0.5rem;
        font-size: 1.8rem;
    }

    /* Services List */
    .list-section ul {
        list-style: none;
        padding: 0;
    }

    .list-section li {
        background: linear-gradient(to right, #f8f9fa 0%, #ffffff 100%);
        margin-bottom: 0.75rem;
        padding: 1rem 1rem 1rem 1.5rem;
        border-left: 4px solid #2a5298;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        position: relative;
    }

    .list-section li:before {
        content: "▶";
        color: #2a5298;
        position: absolute;
        left: 0.5rem;
    }

    .list-section li:hover {
        transform: translateX(8px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        border-left-color: #1e3c72;
    }

    /* Experience Section */
    .image-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .image-section h2 {
        color: white;
        border-bottom-color: white;
    }

    .experience-number {
        font-size: 6rem;
        font-weight: bold;
        line-height: 1;
        margin: 1rem 0;
    }

    .experience-text {
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
    }

    .experience-details {
        font-size: 1.1rem;
        max-width: 400px;
        line-height: 1.8;
        opacity: 0.95;
    }

    /* About Section */
    .text-section {
        background-color: #f8f9fa;
    }

    .text-section p {
        background-color: white;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        text-align: left;
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 1rem;
    }

    .text-section p:last-child {
        margin-bottom: 0;
    }

    /* Contact Section */
    .contact-section {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
    }

    .contact-section h2 {
        color: white;
        border-bottom-color: white;
    }

    .contact-form {
        background-color: rgba(255, 255, 255, 0.95);
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: bold;
        color: #1e3c72;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 0.75rem;
        border: 2px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #2a5298;
    }

    .btn {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        color: white;
        padding: 0.85rem 2rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
        font-weight: bold;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: 100%;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(30, 60, 114, 0.4);
    }

    @media (max-width: 968px) {
        .container {
            grid-template-columns: 1fr;
            grid-template-rows: repeat(4, auto);
        }
        
        .header {
            font-size: 2.5rem;
            padding: 2rem 1.5rem;
        }

        .tagline {
            font-size: 1rem;
        }

        .experience-number {
            font-size: 4rem;
        }

        .experience-text {
            font-size: 1.4rem;
        }
    }
</style>
```

</head>
<body>
    <header class="header">
        DEBAILLON, LLC
        <div class="tagline">Technology Consulting & Digital Strategy</div>
    </header>

```
<div class="container">
    <!-- Quadrant 1: Services List -->
    <div class="quadrant list-section">
        <h2>Core Services</h2>
        <ul>
            <li>Technology Consulting & Strategic Planning</li>
            <li>Digital Transformation & Innovation</li>
            <li>IT Infrastructure & Architecture</li>
            <li>Cybersecurity & Risk Management</li>
            <li>Cloud Solutions & Migration</li>
            <li>Business Process Optimization</li>
            <li>IT Leadership & Team Development</li>
            <li>Vendor Management & Technology Selection</li>
        </ul>
    </div>

    <!-- Quadrant 2: Experience Highlight -->
    <div class="quadrant image-section">
        <h2>Experience That Matters</h2>
        <div class="experience-number">30+</div>
        <div class="experience-text">Years in IT</div>
        <div class="experience-details">
            Comprehensive expertise across all facets of information technology, from infrastructure to strategy, delivering results that drive business success.
        </div>
    </div>

    <!-- Quadrant 3: About -->
    <div class="quadrant text-section">
        <h2>About DEBAILLON</h2>
        <p>
            With over three decades of hands-on experience in information technology, DEBAILLON, LLC brings unparalleled expertise to help businesses navigate the complex landscape of modern technology. Our comprehensive understanding spans every area of IT, from foundational infrastructure to cutting-edge digital strategy.
        </p>
        <p>
            We don't just implement technology—we partner with you to understand your business goals and craft solutions that drive real growth and success. Our passion for technology is matched only by our commitment to seeing our clients thrive in an increasingly digital world.
        </p>
    </div>

    <!-- Quadrant 4: Contact -->
    <div class="quadrant contact-section">
        <h2>Let's Connect</h2>
        <div class="contact-form">
            <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="company">Company:</label>
                    <input type="text" id="company" name="company">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>
</div>
```

</body>
</html>