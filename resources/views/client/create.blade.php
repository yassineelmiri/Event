<x-master>
    <!--========== FAQ US STYLE START ==========-->
    <div class="lg:pt-30 pt-24 relative z-1 bg-gradient-to-t to-[#FFF1EC] from-white">
        <div class="absolute top-1/2 -translate-y-1/2 right-0 max-w-[14%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/tree-illustration.png" alt="leaf">
        </div>
        <div class="absolute top-[10%] left-[1%] max-w-[9%] z-minus lg:inline-block hidden">
            <img src="assets/images/illustration/bird-illustration.png" alt="leaf">
        </div>
        <div class="lg:pt-30 pt-24" id="ask-form-wrapper">
            <div class="text-center lg:pb-[60px] pb-[40px]">
                <h5 class="section-sub-title-v1">Ajouter Event</h5>
                <h2 class="section-title-v1">Inserte Your Valuable Eventes</h2>
            </div>
            <div class="max-w-[870px] mx-auto">
                <form method="POST" action="{{ route('ajouter') }}" enctype="multipart/form-data"
                    class="grid grid-cols-2 gap-base">
                    @csrf
                    <div class="lg:col-span-1 col-span-2">
                        <input type="text" placeholder="Titre" class="input_style__primary" name="titel">
                        @error('titel')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="lg:col-span-1 col-span-2">
                        <input type="number" placeholder="Nombre de places" class="input_style__primary"
                            name="places_available">
                        @error('places_available')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <input type="date" placeholder="Date" class="input_style__primary" name="date">
                        @error('date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <select class="input_style__primary" name="category">
                            <option  disabled selected>Sélectionner une catégorie</option>
                            @foreach ($category as $category)
                            <option value="{{$category->name}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-2">
                        <input type="text" placeholder="Lieu" class="input_style__primary" name="location">
                        @error('location')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <input type="file" class="input_style__primary" name="image">
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <textarea name="description" cols="30" rows="6" class="input_style__primary" placeholder="Description ..."></textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <button type="submit" onclick="confirm('Voulez-vous vraiment ajouter?')"
                            class="btn_primary__v1">
                            Valider maintenant
                            <i class="bi bi-chevron-right"></i>
                        </button>

                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    <!--========== FAQ US STYLE END ==========-->

    <!--========== INSTAGRAM FEED STYLE START ==========-->
    <div class="instagram_feed_style__one lg:pt-30 pt-24 ">
        <div class="swiper max-w-[1570px] mx-auto px-3 insta-feed-slider">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/instagram/insta-1.webp" alt="instagram" class="w-full" />
                        <a href="#" class="insta-feed-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/instagram/insta-2.webp" alt="instagram" class="w-full" />
                        <a href="#" class="insta-feed-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/instagram/insta-3.webp" alt="instagram" class="w-full" />
                        <a href="#" class="insta-feed-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/instagram/insta-4.webp" alt="instagram" class="w-full" />
                        <a href="#" class="insta-feed-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/instagram/insta-5.webp" alt="instagram" class="w-full" />
                        <a href="#" class="insta-feed-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== INSTAGRAM FEED STYLE END ==========-->


</x-master>
