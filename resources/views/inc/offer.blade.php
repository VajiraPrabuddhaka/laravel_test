<div class="container myview col-md-10 col-lg-10">
    <section class="blue-section">
        <h3>{{ $title }}</h3>
    </section>

    <ul class="plans">
        <li class="plan highlight">
            <span class="price price-green">0€</span>

            <div class="details">
                <h1 class="plan-title">Free</h1>
                <p class="plan-description">Not even a cookie</p>
            </div>

            <button class="btn select pull-right" onclick="window.location='{{ url("offer/editoffer/{id=$id}/{offer_name=$name}") }}'">Edit plan</button>
        </li>
    </ul>

    <p>Edit your offers.</p>
</div>