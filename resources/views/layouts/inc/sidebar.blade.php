<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="#" class="simple-text logo-normal">
            Sempiternal
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('products') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('products') }}">
                    <i class="material-icons">person</i>
                    <p>Products</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('add-product') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ url('add-product') }}">
                    <i class="material-icons">person</i>
                    <p>Add Product</p>
                </a>
            </li>
        </ul>
    </div>
</div>
