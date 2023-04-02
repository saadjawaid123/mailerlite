@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="">

                        <table id="datatable_ajax" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Subscribed At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <form method="post" id="mailerlite-key-form" name="mailerlite-key-form" action="#">
                        <label>
                            <input name="api_key" type="text">
                        </label>
                        <button id="save-btn">Save</button>
                    </form>
                    <form method="post" id="subscriber-create-form" name="subscriber-create-form" action="#">
                        <label>
                            <input name="name" type="text">
                            <input name="email" type="text">
                            <input name="country" type="text">
                        </label>
                        <button id="create-subscriber-btn">Save</button>
                    </form>
                    <form method="post" id="subscriber-update-form" name="subscriber-update-form" action="#">
                        <label>
                            <input name="name" type="text">
                            <input name="email" type="text">
                            <input name="country" type="text">
                            <input name="subscriber" type="text" value="84350339154707617">
                        </label>
                        <button id="update-subscriber-btn">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        $(document).on('ready', function() {
            $('#save-btn').on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('save-mailerlite-api-key') }}",
                    data: $('#mailerlite-key-form').serialize(),
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(data) {
                        console.log(data.error);
                    }
                });
            });
            $('#create-subscriber-btn').on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('create-subscriber') }}",
                    data: $('#subscriber-create-form').serialize(),
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(data) {
                        console.log(data.error);
                    }
                });
            });
            $('#update-subscriber-btn').on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "PUT",
                    url: "{{ route('update-subscriber', ['subscriber' => 1]) }}",
                    data: $('#subscriber-update-form').serialize(),
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(data) {
                        console.log(data.error);
                    }
                });
            });
        });

        $(function() {
            $('#datatable_ajax').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('subscribers') }}",
                    data: function(d) {
                        d.email = 'dasd@dasd.das';
                    }
                },
                columns: [{
                    data: 'id',
                    name: 'id',
                    orderable: false
                },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: false
                    },
                    {
                        data: 'email',
                        name: 'email',
                        orderable: false
                    },
                    {
                        data: 'country',
                        name: 'country',
                        orderable: false
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        orderable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    },
                ],
                "fnDrawCallback": function() {
                    $('.custom-control-input').change(function() {
                        var quiz_id = $(this).data('quiz-id');
                        var status = 1;
                        if (this.checked) {
                            status = 1;
                        } else {
                            status = 0;
                        }

                        var url = '{{ route("update-quiz-status", ["quiz" => ":quiz_id", "status" => ":status"]) }}';
                        url = url.replace(':quiz_id', quiz_id);
                        url = url.replace(':status', status);

                        $.ajax({
                            type: "GET",
                            url: url,
                            data: {},
                            success: function(data) {
                                toastr.success(data.success);
                            },
                            error: function(xhr, message, error) {
                                let err = JSON.parse(xhr.responseText);
                                toastr.error(err.message);
                            }
                        });
                    });
                }
            });
        });
    </script>
@endsection
