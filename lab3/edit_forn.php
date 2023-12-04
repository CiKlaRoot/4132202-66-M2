<form>
    <label for="id_p">ID</label>
    <input type="text" name="id" id="id_p">
    <label for="name_p">Name</label>
    <input type="text" name="id" id="name_p">
    <label for="email_p">Email</label>
    <input type="text" name="id" id="email_p">
    <button type="submit" class="btn btn-primary">SAVE</button>
    <button type="reset" class="btn btn-primary">CANCLE</button>
</form>

<script>
    $(function(){
        $("form").submit(function(e){
            e.preventDefault();

            let fm = $(this);
            $.ajax({
                url:"/add_member.php",
                method : "POST",
                data: fm.serialize(),
                success: function(res) {
                    if (res == 'error')
                        alert("can't insert data.")
                    else
                        $("#tb_member").load("/listitem.php")
                }
            });
        });
    });
</script>