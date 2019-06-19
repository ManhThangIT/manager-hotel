<li class="active treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Quản Lý</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}"><i class="glyphicon glyphicon-user"></i><span>Admin</span></a>
        </li>
        <li class="{{ Request::is('nhanViens*') ? 'active' : '' }}">
            <a href="{!! route('nhanViens.index') !!}"><i class="fa fa-edit"></i><span>Nhân Viên</span></a>
        </li>
    </ul>
  </li>







<li class="{{ Request::is('congViecs*') ? 'active' : '' }}">
    <a href="{!! route('congViecs.index') !!}"><i class="fa fa-edit"></i><span>Công Việc</span></a>
</li>

<li class="{{ Request::is('tangs*') ? 'active' : '' }}">
    <a href="{!! route('tangs.index') !!}"><i class="fa fa-edit"></i><span>Tầng</span></a>
</li>

<li class="{{ Request::is('loaiPhongs*') ? 'active' : '' }}">
    <a href="{!! route('loaiPhongs.index') !!}"><i class="fa fa-edit"></i><span>Loại Phòng</span></a>
</li>

<li class="{{ Request::is('kieuThues*') ? 'active' : '' }}">
    <a href="{!! route('kieuThues.index') !!}"><i class="fa fa-edit"></i><span>Kiểu Thuê</span></a>
</li>

<li class="{{ Request::is('trangThaiPhongs*') ? 'active' : '' }}">
    <a href="{!! route('trangThaiPhongs.index') !!}"><i class="fa fa-edit"></i><span>Trạng Thái Phòng</span></a>
</li>

<li class="{{ Request::is('tinhTrangHoaDons*') ? 'active' : '' }}">
    <a href="{!! route('tinhTrangHoaDons.index') !!}"><i class="fa fa-edit"></i><span>Tình Trạng Hóa Đơn</span></a>
</li>

<li class="{{ Request::is('khachHangs*') ? 'active' : '' }}">
    <a href="{!! route('khachHangs.index') !!}"><i class="fa fa-edit"></i><span>Khách Hàng</span></a>
</li>

<li class="{{ Request::is('dichVus*') ? 'active' : '' }}">
    <a href="{!! route('dichVus.index') !!}"><i class="fa fa-edit"></i><span>Dịch Vụ</span></a>
</li>

<li class="{{ Request::is('bangGias*') ? 'active' : '' }}">
    <a href="{!! route('bangGias.index') !!}"><i class="fa fa-edit"></i><span>Bảng Giá</span></a>
</li>

