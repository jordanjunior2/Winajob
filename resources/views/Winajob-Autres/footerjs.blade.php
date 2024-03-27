<!-- javascript -->
<script src="{{asset('partial/js/jquery.min.js')}}"></script>
    <script src="{{asset('partial/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('partial/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('partial/js/plugins.js')}}"></script>

    <!-- selectize js -->
    <script src="{{asset('partial/js/selectize.min.js')}}"></script>
    <script src="{{asset('partial/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('partial/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('partial/js/counter.int.js')}}"></script>

    @if(auth() -> user() )
    <script>
        window.user = {
            id: {{auth() -> id()}},
            name: "{{auth() -> user() -> name}}"
        };

        window.csrfToken = "{{ csrf_token()}}";
    </script>
    @endif
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('partial/js/app.js')}}"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="{{asset('partial/js/home.js')}}"></script>
    <!-- Import repeater js  -->
    <script src="{{asset('partial/js/repeater.js')}}" type="text/javascript"></script>
    <script>
        /* Create Repeater */
        $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
    </script>
    <script>
        /* Create Repeater */
        $("#repeater2").createRepeater({
            showFirstItemToDefault: true,
        });
    </script>
    <script>
        /* Create Repeater */
        $("#repeater3").createRepeater({
            showFirstItemToDefault: true,
        });
    </script>

    <script>
        $('.like').on('click',function(event){
            event.preventDefault();
            var isLike = event.target.previousElementSibling = null? true : false;
            console.log(isLike);
            $.ajax({
                methods: 'POST'
                url: ...
                data: {isLike: isLike,profil_id:...,_token: token}
            })
        })
    </script>
    