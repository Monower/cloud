<?php 
include '../templates/header.php';






?>


Signup As: <button id="id0">Client</button> <button id="id8">Developer</button>
<br><br>

<div id="id1" style="display: none">
    <form id="id7">
        <h2>Sign  Up as a client</h2><br>
        User Name: <input type="text" name="cname" id="id2" required><br>
        Email: <input type="email" name="cmail" id="id3" required><br>
        Password: <input type="password" name="cpass" id="id4" required><br>
        Retype Password: <input type="password" name="crepass" id="id5"><br>
        Country: <input type="text" name="ccountry" id="id6"><br>
        <input type="submit" value="signup">
    </form>
</div>

<div id="id9" style="display: none">
    <form id="id10">
        <h2>Sign  Up as a Developer</h2><br>
        User Name: <input type="text" name="cname" id="id11" required><br>
        Email: <input type="email" name="cmail" id="id12" required><br>
        Password: <input type="password" name="cpass" id="id13" required><br>
        Retype Password: <input type="password" name="crepass" id="id14"><br>
        Country: <input type="text" name="ccountry" id="id15"><br>
        <input type="submit" value="signup">
    </form>
</div>





<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script>
    $(document).ready(function(){

        //for client
        $('#id0').click(function(){
            $('#id1').css('display','block');
            $('#id9').css('display','none');
        })

        $('#id8').click(function(){
            $('#id9').css('display','block');
            $('#id1').css('display','none');
        })

        $('#id7').submit(function(e){
            e.preventDefault();

            let cname=$('#id2').val();
            let cmail=$('#id3').val();
            let cpass=$('#id4').val();
            let crepass=$('#id5').val();
            let country=$('#id6').val();

            $.ajax({
                type: 'POST',
                url: '../process/verify_clients.php',
                data: {cname: cname,cmail: cmail},
                success: function(data){
                    alert('user added');    
                },
                error: function(data){
                    alert(data);
                }
            })
        })
    })
</script>
<?php include '../templates/footer.php'; ?>