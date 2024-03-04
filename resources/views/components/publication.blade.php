<div class="group/card package-card-style-one ">
    <div class="overflow-hidden relative">
        <a href="package-details.html">
            <img src="assets/images/packages/p1-1.webp" alt="package-img"
                class="w-full group-hover/card:scale-105 duration-300">
        </a>
        <span
            class="absolute inline-block top-5 right-5 text-sm text-white rounded-full bg-[#219FFF] py-1 px-3">20%
            off</span>
    </div>
    <h3 class="card-title-alpha group-hover/card:text-primary-1 lg:mt-6 mt-5"><a
            href="{{ route('show.publications', $publication->id) }}">{{ $publication->titel }}-[{{ $publication->location }}]</a>
    </h3>

    <ul
        class="flex flex-wrap lg:text-[15px] text-[13px] font-medium text-dark-2 mt-4 package-feature">
        <li>
            <span class="text-primary-1">
                <i class="bi bi-people"></i>
            </span>
            <span>{{ $publication->places_available }} People</span>
        </li>
        <li>
            <span class="text-primary-1">
                <i class="bi bi-clock"></i>
            </span>
            <span>{{ $publication->date }} Days</span>
        </li>
        <li>
            <span class="text-primary-1">
                <i class="bi bi-coin"></i>
            </span>
            </span>
        </li>
    </ul>

    <a href="{{ route('show.publications', $publication->id) }}"
        class="package-explore-btn group/btn">
        <span class="mr-2">Explore Now</span>
        <svg class="group-hover/btn:translate-x-2 duration-200 " width="27"
            height="14" viewBox="0 0 27 14" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0.217443 6.25H18.4827C18.6276 6.25 18.7001 6.30263 18.7001 6.40789V7.59211C18.7001 7.69737 18.6276 7.75 18.4827 7.75H0.217443C0.0724811 7.75 0 7.69737 0 7.59211V6.40789C0 6.30263 0.0724811 6.25 0.217443 6.25Z"
                fill="currentColor" />
            <path
                d="M20.7001 12.28L25.0467 7.9333C25.5601 7.41997 25.5601 6.57997 25.0467 6.06664L20.7001 1.71997"
                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </a>
</div>