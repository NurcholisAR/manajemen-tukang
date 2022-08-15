<table id="tableTukang" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Total Harian</th>
            <th>Total Lembur</th>
            <th>Gaji Bersih</th>
            <th>Proyek & unit</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
<script>
    $(document).ready(function() {
        list();
    });

    function list() {
        var table = $('#table_tukang').DataTable({
            "processing": true,
            "serverSide": true,
            retrieve: true,
            lengthChange: true,
            info: true,
            autoWidth: false,
            responsive: true,
            // language: {
            //     url: "/js/bahasa.json",
            // },
            pagingType: "full_numbers",
            pageLength: 5,
            lengthMenu: [5, 10, 15, 30],
            "order": [

            ],
            "ajax": {
                "url": "<?= site_url('Tukang/list_data'); ?>",
                "type": "POST"
            },
            "columnDefs": [{
                "targets": [0, 4],
                "orderable": false
            }],
        });
    }
</script>