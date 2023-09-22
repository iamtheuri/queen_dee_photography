<!DOCTYPE html>
<html lang="en">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair:opsz,wght@5..1200,400;5..1200,500;5..1200,600;5..1200,800;5..1200,900&display=swap');
    *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Playfair', serif;
    }
    .about-banner{
        width: 100%;
        min-height: 20vh;
        background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url("images/_42A8299.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .about-content{
        width: 100%;
        min-height: 50vh;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding: 0px 2rem;
    }
    .about-us h1{
        color: #fff000;
        font-size: 90px;
        margin-bottom: 20px;
        line-height: 1.1;
        font-weight: 400;
        font-family: 'Playfair', serif;
    }
    .about-article h1{
        font-size: 60px;
        font-family: 'Playfair', serif;
    }
    .about-article h2{
        font-size: 3rem;
        font-family: 'Playfair', serif;
    }
    .about-article p{
        font-size: 1.5rem;
        font-family: 'Playfair', serif;
    }
    .about-article ul{
        font-size: 1.2rem;
        font-family: 'Playfair', serif;
    }
    .about-article ul li{
        font-size: 1.2rem;
        font-family: 'Playfair', serif;
        color: grey;
    }
    .about-article a{
        font-size: 1.5rem;
        font-family: 'Playfair', serif;
        font-style: italic;
        color: #fff000;
    }
    .pricing-section {
        display: flex;
        justify-content: center;
        align-items:baseline;
        flex-wrap: wrap;
        gap: 20px;
        padding: 20px;
    }

    .pricing-package {
        background-color: #1a1a1a;
        border-radius: 10px;
        padding: 20px;
        text-align: left;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        flex: 2;
        max-width: 300px;
    }

    .package-name {
        font-size: 1.5rem;
        margin: 10px 0;
        color: #9f654f;
    }

    .package-description {
        font-size: 1rem;
        color: aliceblue;
    }

    .package-features ul {
        list-style-type: circle;
        padding: 0;
    }

    .package-features li {
        text-align: left;
    list-style: disc;
        color: #fff;
        margin-bottom: 10px;
    }

    .package-price {
        font-size: 1.5rem;
        color: #fff;
        margin: 20px 0;
    }

    .package-button {
        text-align: center;
        width: 100%;
        display: inline-block;
        padding: 10px 20px;
        background-color: #9f654f;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .package-button:hover {
        background-color: #ab7865;
    }
</style>

@include('partials.header') 
@include('partials.navbar')

<div class="container-fluid wrapper">
    <div class="about-banner">
        <div class="about-content">
            <div class="about-us">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
    <div class="about-content">
        <div class="col">

            <div class="row" style="padding: 5rem;">
                <div class="col-lg-9 order-md-1 order-2 about-article">
                    <section>
                        <h2>Meet [Queen Dee]</h2>
                        <p>
                            I'm [Queen Dee], the lead photographer and founder of [Queen-Dee-Photography]. Photography has been a passion of mine for as long as I can remember. I love the way it allows us to freeze time and capture those beautiful, fleeting moments that define our lives.
                        </p>
                        <h2>Our Journey</h2>
                        <p>
                            My journey into wedding photography began with a single click of the shutter at a dear friend's wedding. The joy, the tears, the laughter—I was hooked. That moment sparked a lifelong love affair with capturing love stories. Since then, I've had the incredible privilege of documenting the most important moments in people's lives.
                        </p>
                    </section>
                </div>
                <div class="col-lg-3 order-md-2 order-1">
                    <div class="avatar-container">
                        <img src="{{ asset('images/IMG_20230805_132014_640.webp') }}" class="img-fluid avatar" width="100%">
                    </div>
                </div>
            </div>

            <div class="row" style="padding: 5rem;">
                <div class="col-lg-3 order-lg-1">
                    <div class="avatar-container">
                        <img src="{{ asset('images\_42A9419.webp') }}" class="img-fluid avatar" width="100%">
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 about-article">
                    <section>
                        <h2>Our Approach</h2>
                        <p>
                            At [Queen-Dee-Photography], our approach to wedding photography is all about storytelling. We believe in the power of authentic moments—the unscripted laughter, the stolen glances, the tender kisses. We're not just photographers; we're visual storytellers who aim to create a timeless narrative of your love.
                        </p>
                        <h2>Our Style</h2>
                        <p>
                            Our photography style is a blend of photojournalistic and fine art. We adore the candid shots that reveal the raw, unfiltered emotions of your wedding day. But we also take pride in crafting elegant, artistic compositions that you'll cherish for a lifetime. Your wedding day is a work of art, and we're here to make sure it's beautifully captured.
                        </p>
                    </section>
                </div>
            </div>

            <div class="row about-article" style="padding: 5rem;">
                <h2>Why Choose Us</h2>
                <ul>
                    <li>
                        <strong>Experience:</strong> With over [X years] of experience, we've photographed countless weddings, each one unique and special in its own way. We know how to anticipate moments, adapt to different environments, and tell your story with grace and artistry.
                    </li>
                    <li>
                        <strong>Personalized Service:</strong> We understand that every couple is unique, and your wedding day is unlike any other. We take the time to get to know you, your vision, and your preferences. Your wedding photography experience should be as special as your love story.
                    </li>
                    <li>
                        <strong>Passion for Perfection:</strong> We are passionate about what we do. We pour our hearts and souls into every photo we capture and every album we create. Your wedding photos are a reflection of our commitment to excellence.
                    </li>
                </ul>
                <h2>Let's Chat!</h2>
                <p>
                    We can't wait to learn more about you and your love story. Whether you're planning an intimate elopement or a grand celebration, we're here to make your photography dreams come true. Let's connect, have a cup of coffee (or tea), and chat about how we can capture your day beautifully.
                </p>
                <p>
                    Ready to take the next step? 
                    {{-- <button class="btn btn-book"> --}}
                        <a href="/contact">Let's Talk</a>
                    {{-- </button> --}}
                </p>
                <p>We can't wait to be a part of your journey! Thank you for considering [Queen-Dee-Photography] for your wedding photography needs. We're honored to be a part of your love story.
                </p>
                <h2 style="text-align: center;">Checkout Our Pricing!</h2>
            </div>

            {{-- Pricing Section --}}
            <section class="pricing-section">
                <div class="pricing-package">
                    <h2 class="package-name">Bronze Package</h2>
                    <p class="package-description">Ideal for intimate weddings and elopements.</p>
                    <div class="package-features">
                        <ul>
                            <li>Basic coverage</li>
                            <li>Ceremony & key moments</li>
                            <li>High-res edited images</li>
                            <li>Basic coverage</li>
                            <li>Ceremony & key moments</li>
                            <li>High-res edited images</li>
                        </ul>
                    </div>
                    <p class="package-price">Ksh.100,000</p>
                    <a href="/contact" class="package-button">Book  Now</a>
                </div>
                <div class="pricing-package">
                    <h2 class="package-name">Silver Package</h2>
                    <p class="package-description">Timeless Elegance weddings</p>
                    <div class="package-features">
                        <ul>
                            <li>Basic coverage</li>
                            <li>Two photographers for additional angles and perspectives.</li>
                            <li>Full day coverage ensures no moment is missed.</li>
                            <li>A premium custom-designed photo album.</li>
                            <li>Engagement session with prints included</li>
                            
                        </ul>
                    </div>
                    <p class="package-price">Ksh.150,000</p>
                    <a href="/contact" class="package-button">Book  Now</a>
                </div>
                <div class="pricing-package">
                    <h2 class="package-name">Bronze Package</h2>
                    <p class="package-description">Ideal for intimate weddings and elopements.</p>
                    <div class="package-features">
                        <ul>
                            <li>Basic coverage</li>
                            <li>Ceremony & key moments</li>
                            <li>High-res edited images</li>
                            <li>Basic coverage</li>
                            <li>Ceremony & key moments</li>
                            <li>High-res edited images</li>
                        </ul>
                    </div>
                    <p class="package-price">Ksh.200,000</p>
                    <a href="/contact" class="package-button">Book Now</a>
                </div>
                <div class="pricing-package">
                    <h2 class="package-name">Bronze Package</h2>
                    <p class="package-description">Ideal for intimate weddings and elopements.</p>
                    <div class="package-features">
                        <ul>
                        <li>Basic coverage</li>
                            <li>Ceremony & key moments</li>
                            <li>High-res edited images</li>
                            <li>Basic coverage</li>
                            <li>Ceremony & key moments</li>
                            <li>High-res edited images</li>
                        </ul>
                    </div>
                    <p class="package-price">ksh.250,000</p>
                    <a href="/contact" class="package-button">Book Now</a>
                </div>
            </section>

        </div>
        
    </div>
</div>

@include('partials.footer')
</html>
