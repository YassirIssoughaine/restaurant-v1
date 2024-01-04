<section class="section bg-black-10 text-center" aria-label="service" id="service">
    <div class="container">
        <p class="section-subtitle label-2">Delicious Menu</p>
        <h2 class="headline-1 section-title">We Offer Top Notch</h2>

        <ul class="grid-list" style="margin-bottom: 40px">
            @foreach ($categories as $category)
                <li>
                    <div class="service-card">
                        <a class="has-before hover:shine">
                            <figure class="card-banner img-holder">
                                <img src="{{ $category->image ? asset($category->image) : asset('images/category.jpg') }}" loading="lazy" alt="{{ $category->name }}"
                                    class="img-cover">
                            </figure>
                        </a>
                        <div class="card-content">
                            <h3 class="title-4 card-title">
                                <a class=" category-filter btn-text hover-underline label-2" data-category="{{ $category->id }}" style="margin-top: -40px">
                                    {{ $category->name }}
                                </a>
                            </h3>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <ul class="grid-list" id="filteredMeals">
            @foreach ($meals as $meal)
                <li class="meal-item category-{{ $meal->category_id }}">
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                            <img src="{{ $meal->image ? asset($meal->image) : asset('images/menu-6.png') }}"
                                width="100" height="100" loading="lazy" alt="{{ $meal->name }}"
                                class="img-cover">
                        </figure>

                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <p style="color: goldenrod">{{ $meal->category->name }}</p>
                                    <p class="card-title">{{ $meal->name }}</p>
                                </h3>
                                <span class="span title-2">${{ $meal->price }}</span>
                            </div>
                            <p class="card-text label-1">{{ $meal->description }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <p class="menu-text text-center">
            During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
        </p>
        <img src="{{ asset('images/shape-5.png') }}" width="921" height="1036" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
        <img src="{{ asset('images/shape-6.png') }}" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-3 move-anim">
    </div>
</section>
