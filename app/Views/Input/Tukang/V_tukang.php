<?= $this->extend('_partials/home') ?>
<?= $this->section('container') ?>
<div class="btn-group float-right">
    <ol class="breadcrumb hide-phone p-0 m-0">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>
</div>

<h4 class="page-title"><?= $title ?></h4>

<div class="card mb-3">
    <div class="card-body list_tukang">
        <div class="card-title mb-3">
            <button type="submit" class="btn btn-primary btn-flat btn_add">
                <i class="mdi mdi-account-plus "></i> Tambah Data
            </button>
        </div>
        <p class="card-text list_all"></p>
    </div>
    <div class="v_modal" style="display: none;"></div>
</div>


<script src="/assets/js/jquery-1.7.2.min.js"></script>
<script>
    function tampil_data() {
        $.ajax({
            url: "<?= site_url('Tukang/list_tukang') ?>",
            dataType: "json",
            success: function(response) {
                $('.list_tukang').html(response.data);
            },
            error: function(xhr, ajaxOption, throwError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + throwError);
            }
        })
    }

    $(document).ready(function() {
        tampil_data()
        $('.btn_add').click(function(e) {
            e.preventDefault();
            $.ajax({
                // url: "<?= site_url('Tukang/form_tambah_tukang'); ?>",
                dataType: "json",
                success: function(response) {
                    $('.v_modal').html(response.data).show();
                    $('#modal_add_alter').modal('show');
                },
                error: function(xhr, ajaxOption, throwError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + throwError);
                }
            });
        });
    })
</script>
<?= $this->endSection() ?>