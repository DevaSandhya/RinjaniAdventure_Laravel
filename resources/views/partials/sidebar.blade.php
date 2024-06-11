<div class="sidebar">
  <div class="logo-details">
    <i class="bx bx-category"></i>
    <span class="logo_name">Rinjani Adventure</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class="bx bx-grid-alt"></i>
        <span class="links_name">Dasbor</span>
      </a>
    </li>
    <li>
      <a href="/category" class="{{ request()->Is('category*') ? 'active' : '' }}">
        <i class="bx bx-box"></i>
        <span class="links_name">Kategori</span>
      </a>
    </li>
    <li>
      <a href="/transaction" class="{{ request()->Is('transaction*') ? 'active' : '' }}">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">Transaksi</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-log-out"></i>
        <span class="links_name">Keluar</span>
      </a>
    </li>
  </ul>
</div>
