<!-- sidebar-wrapper -->
<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="index.html">EVENT</a>
        </div>

        <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-user me-2"></i>User Profile</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('admin.index') }}">Profile</a></li>
                        <li><a href="{{ route('admin.utilisateur') }}">Utilisateur</a></li>
                        <li><a href="profile-notification.html">Notifications</a></li>
                        <li><a href="profile-setting.html">Profile Settings</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-chart-line me-2"></i>Dashboard</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('admin.Analytics') }}">Analytics</a></li>
                        <li><a href="index-crypto.html">Cryptocurrency</a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-blogger me-2"></i>categories</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('admin.categories') }}">afficher</a></li>
                        <li><a href="{{ route('ajouter.categories') }}">Ajouter</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-shopping-cart me-2"></i>E-Commerce</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop-item-detail.html">Shop Detail</a></li>
                        <li><a href="shop-cart.html">Shopcart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-envelope me-2"></i>Email Template</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="email-confirmation.html">Confirmation</a></li>
                        <li><a href="email-password-reset.html">Reset Password</a></li>
                        <li><a href="email-alert.html">Alert</a></li>
                        <li><a href="email-invoices.html">Invoice</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-invoice me-2"></i>Invoice</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="invoice-list.html">Invoice List</a></li>
                        <li><a href="invoice.html">Invoice Preview</a></li>
                    </ul>
                </div>
            </li>

            <li
                class="relative lg:m-8 m-6 px-8 py-10 rounded-lg bg-gradient-to-b to-transparent from-slate-800 text-center">
                <span class="relative z-10">
                    <span class="text-xl font-bold h5 text-white">Upgrade to Pro</span>

                    <span class="text-slate-400 mt-3 mb-5 block">Get one month free and subscribe to pro</span>

                    <a href="https://1.envato.market/Event" target="_blank"
                        class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-gray-500/5 hover:bg-gray-500 border-gray-500/10 hover:border-gray-500 text-white rounded-md">Subscribe</a>
                </span>

                <img src="da/images/shree-276.png"
                    class="absolute top-1/2 -translate-y-1/2 start-0 end-0 mx-auto text-center h-40 w-40 z-0 opacity-5"
                    alt="">
            </li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>
<!-- sidebar-wrapper  -->