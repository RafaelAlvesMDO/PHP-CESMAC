<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmeTech</title>
    <link rel="icon" href="{{ asset('img/Cosmetic-Brand-Icon.svg') }}" type="Cosmetic-Brand-Icon/svg">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <nav class="menu">
            <div class="brand">
                <img src="{{ asset('img/Cosmetic-Brand-Icon.svg') }}" alt="Brand-Icon">
                <p>CosmeTech</p>
            </div>
            <div class="menu-items">
                <a href="#products">Products</a>
                <a href="#login">Login</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="product">
                <div class="product-image">
                    <img src="{{ asset('img/Sunlight-Protector.png') }}" alt="">
                </div>
                <div class="product-informations">
                    <h2>Principia Sunlight Protector</h2>
                    <p class="product-description">
                        Principia Sunscreen SPF 60 is a lightweight and effective sun protection 
                        formula designed to shield your skin from harmful UV rays. Offering high-level, 
                        broad-spectrum SPF 60 protection, it helps prevent sunburn and premature aging 
                        caused by sun exposure. Its gentle and non-greasy formula is suitable for all 
                        skin types, providing hydration and comfort while keeping your skin safe. 
                        Ideal for daily use, it absorbs quickly without leaving a residue, making it 
                        a perfect addition to your skincare routine.
                    </p>
                    <p class="product-price">R$59,00</p>
                    <button>Buy</button>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 CosmeTech - All rights reserved.</p>
    </footer>

</body>

</html>