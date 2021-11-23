<div class="card">
    <div class="card-header card-header-primary card-header-icon">
        <h3 class="card-title">Danh sách khách hàng</h3>
        <div>
            <button id="btnAddKH" type="button" rel="tooltip" class="btn btn-success float-right">
                <i class="material-icons">add</i>
                Thêm khách hàng
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="tableNhanVien" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" role="grid" aria-describedby="datatables_info">
                            <thead>
                                <tr role="row">
                                    <th class='text-center text-info'>Mã khách hàng</th>
                                    <th class='text-center text-info'>Họ tên</th>
                                    <th class='text-center text-info'>SĐT</th>
                                    <th class='text-center text-info'>Giới tính</th>
                                    <th class='text-center text-info'>Loại thành viên</th>
                                    <th class='text-center text-info'>Điểm thành viên</th>
                                    <th class='text-center text-info'>Ngày đăng ký</th>
                                    <th class='text-center text-info'>Tổng chi</th>
                                    <th class='text-center text-info'>Thao tác</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class='text-center text-info'>Mã khách hàng</th>
                                    <th class='text-center text-info'>Họ tên</th>
                                    <th class='text-center text-info'>SĐT</th>
                                    <th class='text-center text-info'>Giới tính</th>
                                    <th class='text-center text-info'>Loại thành viên</th>
                                    <th class='text-center text-info'>Điểm thành viên</th>
                                    <th class='text-center text-info'>Ngày đăng ký</th>
                                    <th class='text-center text-info'>Tổng chi</th>
                                    <th class='text-center text-info'>Thao tác</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($DSKhachHang); $i++) {
                                    echo "<tr class='text-center' id='" . $DSKhachHang[$i]->get_MaKH() . "'>";
                                    echo "<td class='text-center makh' >" . $DSKhachHang[$i]->get_MaKH() . "</td>";
                                    echo "<td class='text-center hoten' >" . $DSKhachHang[$i]->get_HoTen() . "</td>";
                                    echo "<td class='text-center sdt' >" . $DSKhachHang[$i]->get_SDT() . "</td>";
                                    echo "<td class='text-center gioitinh' >" . $DSKhachHang[$i]->get_GioiTinh() . "</td>";
                                    echo "<td class='text-center loaitv' >" . $DSKhachHang[$i]->get_LoaiTV()->get_TenLoaiTV() . "</td>";
                                    echo "<td class='text-center diemtv' >" . $DSKhachHang[$i]->get_DiemTV() . "</td>";
                                    echo "<td id='" . date("Y-m-d\TH:i", $DSKhachHang[$i]->get_NgayDK()) . "' class='text-center ngaydk' >" . date('Y-m-d', $DSKhachHang[$i]->get_NgayDK()) . "</td>";
                                    echo "<td class='text-center tongchi' >" . $DSKhachHang[$i]->get_TongChi() . "</td>";
                                ?>
                                    <td class="td-actions text-center">
                                        <button <?php
                                                echo 'id="' . $DSKhachHang[$i]->get_MaKH() . '"'
                                                ?> type="button" rel="tooltip" class="btn btnEditKH btn-link btn-warning btn-just-icon" data-toggle="tooltip" data-placement="top" title="Chỉnh sửa thông tin">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button <?php
                                                echo 'id="' . $DSKhachHang[$i]->get_MaKH() . '"'
                                                ?> type="button" rel="tooltip" class="btn btnDeleteKH btn-link btn-danger btn-just-icon" data-toggle="tooltip" data-placement="top" title="Xóa khách hàng">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                <?php
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modalKhachHang" tabindex="-1" role="dialog" aria-labelledby="modalKhachHang" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm khách hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h2 class="card-title">Thông tin khách hàng</h2>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Họ và tên
                                        </label>
                                        <input id="inputHoTen" type="text" class="form-control personal_info" value=" ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Số điện thoại</label>
                                        <input id="inputSDT" type="number" class="form-control personal_info" value="0">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Ngày đăng ký</label>
                                        <input id="inputNgayDK" type="datetime-local" class="form-control personal_info" value="<?php
                                                                                                                                $now = new DateTime('now');
                                                                                                                                echo $now->format("Y-m-d\TH:i")
                                                                                                                                ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <div class="fields-group align-items-center">
                                            <p class="input-label text-left">Giới tính: </p>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="material-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span id="inputGioiTinh">Chọn giới tính</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <p class='dropdown-item mater-gender-opt'>Nam</p>
                                                    <p class='dropdown-item mater-gender-opt'>Nữ</p>
                                                    <p class='dropdown-item mater-gender-opt'>Khác</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <div class="fields-group align-items-center">
                                            <p class="input-label text-left">Loại thành viên: </p>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="material-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span id="inputLoaiTV">Chọn loại thành viên</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <p class='dropdown-item mater-rank-opt'>Vàng</p>
                                                    <p class='dropdown-item mater-rank-opt'>Bạc</p>
                                                    <p class='dropdown-item mater-rank-opt'>Đồng</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">
                                            Điểm thành viên
                                        </label>
                                        <input id="inputDiemTV" type="number" class="form-control personal_info" value="0">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">
                                            Tổng chi
                                        </label>
                                        <input id="inputTongChi" type="number" class="form-control personal_info" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                <button id="btnConfirm" type="button" class="btn btn-success">Lưu</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var modal = $('#modalKhachHang')
        var tableNV = $('#tableNhanVien').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/vi.json'
            }
        });

        function initModalData($row) {
            $('#inputHoTen').attr('value', $row.find('.hoten').html())
            $('#inputSDT').attr('value', $row.find('.sdt').html())
            $('#inputNgayDK').attr('value', $row.find('.ngaydk').attr('id'))
            $('#inputDiemTV').attr('value', $row.find('.diemtv').html())
            $('#inputTongChi').attr('value', $row.find('.tongchi').html())
            $("#inputGioiTinh").text($row.find('.gioitinh').text());
            $("#inputLoaiTV").text($row.find('.loaitv').text());
        }

        function clearModalData() {
            $('#inputHoTen').attr('value', '')
            $('#inputSDT').attr('value', '')
            $('#inputNgayDK').attr('value', new Date())
            $('#inputDiemTV').attr('value', '')
            $('#inputTongChi').attr('value', '')
        }

        function updateKH() {
            $.ajax({
                type: "POST",
                url: "/coffeeshopmanagement/controllers/C_KhachHang.php",
                data: {
                    action: 'update',
                    id: 'kh001',
                    hoten: $('#inputHoTen').val(),
                    sdt: $('#inputSDT').val(),
                    ngaydk: $('#inputNgayDK').val(),
                    gioitinh: $('#inputGioiTinh').text(),
                    loaitv: $('#inputLoaiTV').text(),
                    diemtv: $('#inputDiemTV').val(),
                    tongchi: $('#inputTongChi').val()
                },
                beforeSend: function() {

                },
                success: function(response) {
                    // Swal.fire({
                    //     title: response
                    // })
                    if (response.includes("success"))
                        Swal.fire(
                            'Thành công!',
                            'Thông tin khách hàng đã được cập nhật',
                            'success'
                        )
                    else
                        Swal.fire(
                            'Thất bại!',
                            '.Đã xảy ra lỗi. Vui lòng thử lại',
                            'error'
                        )
                },
                complete: function() {
                    modal.modal('hide')
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            })
        }

        function addKH() {
            $.ajax({
                type: "POST",
                url: "/coffeeshopmanagement/controllers/C_KhachHang.php",
                data: {
                    action: "add",
                    hoten: $('#inputHoTen').val(),
                    sdt: $('#inputSDT').val(),
                    ngaydk: $('#inputNgayDK').val(),
                    gioitinh: $('#inputGioiTinh').text(),
                    loaitv: $('#inputLoaiTV').text(),
                    diemtv: $('#inputDiemTV').val(),
                    tongchi: $('#inputTongChi').val()
                },
                beforeSend: function() {

                },
                success: function(response) {
                    // Swal.fire({
                    //     title: response,
                    // })
                    if (response.includes("success"))
                        Swal.fire(
                            'Thành công!',
                            'Thông tin khách hàng đã được cập nhật',
                            'success'
                        )
                    else
                        Swal.fire(
                            'Thất bại!',
                            '.Đã xảy ra lỗi. Vui lòng thử lại',
                            'error'
                        )
                },
                complete: function() {
                    modal.modal('hide')
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            })
        }

        $(".mater-gender-opt").each(function(index) {
            $(this).on("click", function() {
                $("#inputGioiTinh").text($(this).text());
            });
        });

        $(".mater-rank-opt").each(function(index) {
            $(this).on("click", function() {
                $("#inputLoaiTV").text($(this).text());
            });
        });

        $('#btnAddKH').click(function() {
            modal.modal('show')
            clearModalData()
        })

        $('.btnEditKH').click(function() {
            var $row = $(this).closest('tr')
            $("#btnConfirm").addClass('view')
            modal.modal('show')
            initModalData($row)
        })

        $('.btnDeleteKH').click(function() {
            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa khách hàng?',
                text: "Việc làm này sẽ không thể hoàn tác!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Thành công',
                        'Thông tin khách hàng đã được xóa khỏi hệ thống',
                        'success'
                    )
                }
            })
        })

        $("#btnConfirm").click(function() {
            if ($(this).hasClass('view')) {
                updateKH()
            } else {
                alert("add")
                addKH()
            }
        })
    })
</script>