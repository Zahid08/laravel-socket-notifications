<html>
<body>

{{\Illuminate\Support\Facades\Auth::id ()}}
</body>

@vite('resources/js/app.js')
<script>
    // setTimeout(()=>{
    //     window.Echo.channel('testing')
    //         .listen('.runningWebSocketName',(e)=>{
    //             console.log(e);
    //         })
    // },2000)

    setTimeout(()=>{
        window.Echo.private('myPrivateChanel.user.{{\Illuminate\Support\Facades\Auth::id ()}}')
            .listen('.private_message',(e)=>{
                console.log(e);
            })
    },2000)
</script>
</html>
