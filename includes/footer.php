<footer class="footer">
<h3>Rentals <?php echo date('d-M-Y');?> All &copyRights Reserved</h3>
</footer>
<script>
        const imageUpload = document.getElementById('imageUpload');
        const imagePreview = document.getElementById('imagePreview');

        imageUpload.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.innerHTML = `<img src="${e.target.result}" alt="Image Preview">`;
                }

                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
