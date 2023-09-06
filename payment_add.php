<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800&display=swap');

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    width: 100%;
    height: auto;
}









main {
    width: 100%;
}

main .section-4 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 75px 0px;
    row-gap: 50px;
}
main .section-4 .section-4-1, main .section-4 .section-4-2 {
    width: 60%;
    display: flex;
    justify-content: center;
}
main .section-4 .section-4-1 .section-main {
    display: flex;
    flex-direction: column;
    align-items: center;
    row-gap: 10px;
}
main .section-4 .section-4-1 .section-main h1 {
    font-size: 40px;
    line-height: 42px;
    color: #1d1b67;
    text-align: center;
}
main .section-4 .section-4-1 .section-main p {
    color: #425466;
    line-height: 24px;
    text-align: center;
}
main .section-4 .section-4-2 .section-main div.pricing-body {
    display: flex;
    flex-direction: column;
    align-items: center;
    row-gap: 30px;
}
main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-header {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    row-gap: 15px;
}
main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-header .pricing-checkbox {
    display: flex;
    column-gap: 10px;
    align-items: center;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-header .pricing-checkbox span {
    font-size: 14px;
    color: #425466;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-header .pricing-checkbox>div {
    width: 45px;
    background: #1d1b67;
    height: 24px;
    border-radius: 15px;
    position: relative;
    cursor: pointer;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-header .pricing-checkbox>div div {
    position: absolute;
    width: 18px;
    height: 18px;
    background-color: #fff;
    top: 50%;
    left: 3px;
    transform: translateY(-50%);
    border-radius: 50%;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-header .pricing-checkbox>div.anually div {
    left: unset;
    right: 3px;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div {
    display: none;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div {
    display: flex;
    column-gap: 17px;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card {
    padding: 25px;
    border-radius: 8px;
    width: 280px;
    position: relative;
    border: 1px solid #b5b6b87d;
    box-shadow: 1px 1px #b5b6b86e;
    height: fit-content;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-header {
    display: flex;
    flex-direction: column;
    row-gap: 10px;
    justify-content: center;
    align-items: center;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-header .card-price {
    font-size: 26px;
}
main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-header .card-price span {
    font-size: 14px;
    color: darkgray;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-header p {
    color: #425466;
    line-height: 24px;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-body {
    padding-top: 25px;
    border-top: 1px solid lightgray;
    margin-top: 15px;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-body ul {
    list-style-type: none;
    display: flex;
    flex-direction: column;
    row-gap: 12px;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-body ul li {
    color: #b5b6b8;
    position: relative;
    font-size: 14px;
    display: flex;
    column-gap: 10px;
    align-items: center;
}
main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-body ul li img {
    width: 20px;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-body ul li::before {
    color: #1d1b67;
    font-weight: bold;
    width: 20px;
    margin-left: -18px;
    font-size: 25px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-footer {
    margin-top: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card .card-footer a {
    background: #1d1b67;
    color: #f0eeeb;
    font-weight: 500;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    font-size: 14px;
    width: 100%;
    text-align: center;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card:nth-of-type(2) .card-footer button {
    background: #1d1b67;
    color: #fff;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card:nth-of-type(2) .card-footer button:hover {
    background: transparent;
    color: #b5b6b8;
}

main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div.active {
    display: block;
}




@media only screen and (max-width: 1200px) {
  


    




    main .section-4 {
        padding: 65px 0px 35px 0px;
    }
    main .section-4 .section-4-1, main .section-4 .section-4-2 {
        width: 90%;
    }
    main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div {
        flex-wrap: wrap;
        row-gap: 20px;
        column-gap: 20px;
    }
    main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card {
        width: calc(50% - 10px);
        height: unset;
    }
    main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card:last-child {
        width: 100%;
    }
}

@media only screen and (max-width: 600px) {
   


    main .section-4 .section-4-2 .section-main div.pricing-body .pricing-body-plans>div>div .card {
        width: 100%;
        height: fit-content;
    }
}
    </style>
</head>
<body>
    <nav>
        <div class="nav-1">
            <div class="nav-main">
                <div class="nav-logo">
                    
                </div>
                
            </div>
        </div>
        <div class="nav-2">
            <div class="nav-main">
                
                <div class="nav-mobile-menu" id="nav-mobile-menu">
                    
                </div>
            </div>
        </div>
    </nav>

    

    <main>
        
        <section class="section-4">
            <div class="section-4-1">
                <div class="section-main">
                    <h1>Flexible Plans for Everyone</h1>
                    <p>Explore our budget-friendly payment options tailored to your needs, making education accessible for all. Start your journey toward success with ease</p>
                </div>
            </div>
            <div class="section-4-2">
                <div class="section-main">
                    <div class="pricing-body">
                        <div class="pricing-body-header">
                            <div class="pricing-checkbox">
                                <span for="pricing__monthly">Billed Anually</span>
                                <div id="custom-checkbox">
                                    <div class="annual"></div>
                                </div>
                                <span for="pricing__anually">Billed Monthly</span>
                            </div>
                        </div>
                        <div class="pricing-body-plans">
        
                            <div class="active" id="pricing__monthly__plan">
                                <div>
                                    <!-- <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-price">$4<span>/mo</span></h2>
                                            <p>Perfect plan if you're just starting out.</p>
                                        </div>
                                        <div class="card-body">
                                            <ul>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Linkedin Integration</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Twitter Integration</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Real-time Analytics</p></li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#">Subscribe Now</a>
                                        </div>
                                    </div> -->
                                    <div class="card" style="width: 100% !important">
                                        <div class="card-header">
                                            <h2 class="card-price">INR 499<span>/year</span></h2>
                                            <p>Affordability meets opportunity your</p> <p> path to knowledge, simplified</p>
                                        </div>
                                        <div class="card-body">
                                            <ul>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Add Free Experience</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Personalized Dashboard</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Get Only Matching Scholarship</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>statistics Of Scholarships</p></li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <a href="https://api.razorpay.com/v1/l/subscriptions/sub_MYDlM4kh5pyvfZ">Subscribe Now</a>
                                        </div>
                                    </div>
                                    <!-- <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-price">$7<span>/mo</span></h2>
                                            <p>Perfect plan if you're just starting out.</p>
                                        </div>
                                        <div class="card-body">
                                            <ul>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Linkedin Integration</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Twitter Integration</p></li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#">Subscribe Now</a>
                                        </div><div
                                    </div> -->
                                </div>
                            </div>
                            <div id="pricing__anually__plan">
                                <div>
                                    <!-- <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-price">$50</h2>
                                            <p>Perfect plan if you're just starting out.</p>
                                        </div>
                                        <div class="card-body">
                                            <ul>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Linkedin Integration</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Twitter Integration</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Real-time Analytics</p></li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#">Subscribe Now</a>
                                        </div>
                                    </div> -->
                                    <div class="card" style="width: 100% !important">
                                        <div class="card-header">
                                            <h2 class="card-price">INR 49<span>/mon</span></h2>
                                            <p>Affordability meets opportunity your</p> <p> path to knowledge, simplified</p>
                                        </div>
                                        <div class="card-body">
                                            <ul>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Add Free Experience</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Personalized Dashboard</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Get Only Matching Scholarship</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>statistics Of Scholarships</p></li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <a href="https://api.razorpay.com/v1/l/subscriptions/sub_MYDm1wrI1U275E">Subscribe Now</a>
                                        </div>
                                    </div>
                                    <!-- <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-price">$70</h2>
                                            <p>Perfect plan if you're just starting out.</p>
                                        </div>
                                        <div class="card-body">
                                            <ul>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Linkedin Integration</p></li>
                                                <li><img src="https://rvs-product-pricing-page.vercel.app/assets/Checkmark.svg" alt=""><p>Twitter Integration</p></li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#">Subscribe Now</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <footer>
        
    </footer>
    <script>
        const navEl = document.getElementById("nav-mobile-menu");
const nav = document.getElementsByTagName("nav");

navEl.addEventListener("click", () => {
    nav[1].classList.toggle("active");
});

const planBtn = document.getElementById("custom-checkbox");
const plans = document.querySelectorAll(".pricing-body-plans > div");

planBtn.addEventListener("click", function() {
    this.classList.toggle("anually");
    plans[0].classList.toggle("active");
    plans[1].classList.toggle("active");
});
    </script>
</body>
</html>