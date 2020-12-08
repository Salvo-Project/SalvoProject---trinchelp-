<footer class="py-4" style="background:#333;position:fixed;bottom:0;width:100%;">
<div class="col-12 text-center copyright">
    <p class="mb-0 mt-1 text-white" style="font-size: 16px;">
        &copy; <?php echo date("Y");?> <span class="read-more">Trinchelp</span> - Tutti i diritti Riservati
    </p>
</div>
</footer>
<script>
    $("#contact_modal_form").submit(function(){
        var news_email = $.trim($("#news_email").val());
        if(news_email == ""){
           alert("il campo non può essere vuoto, compila il modulo");
        } else {
        var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: 'http://localhost/website/ripetizioni/inc/ajax/form.php',
            data: form.serialize(),
            dataType: 'script'
        });
    }
});
</script>


</body>
</html>