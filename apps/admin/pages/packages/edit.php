<?php
$package_detail = $context->package_detail;
$pd = obj($package_detail);
$catlist = $context->cat_list;
$meta_tags = null;
$meta_desc = null;
if ($pd->json_obj != "") {
    $jsn = json_decode($pd->json_obj);
    if (isset($jsn->meta->tags)) {
        $meta_tags = $jsn->meta->tags;
    }
    if (isset($jsn->meta->description)) {
        $meta_desc = $jsn->meta->description;
    }
}
?>

<form action="/<?php echo home . route('packageUpdateAjax', ['id' => $pd->id]); ?>" id="update-new-package-form">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">Edit package</h5>
                </div>
                <div class="col text-end my-3">
                    <a class="btn btn-dark" href="/<?php echo home . route('packageList'); ?>">Back</a>
                </div>
            </div>
            <div id="res"></div>
            <div class="row">
                <div class="col-md-8">
                    <h4>Title</h4>
                    <input type="text" name="title" value="<?php echo $pd->title; ?>" class="form-control my-3" placeholder="Title">
                    <h6>Slug</h6>
                    <input type="text" name="slug" value="<?php echo $pd->slug; ?>" class="form-control my-3" placeholder="slug">
                    <h4>Category</h4>
                    <select name="parent_id" class="form-select my-3">
                        <option <?php echo $pd->parent_id == 0 ? "selected" : null; ?> value="0">Uncategorised</option>
                        <?php foreach ($catlist as  $cv) {
                            $cv = obj($cv);
                        ?>
                            <option <?php echo $pd->parent_id == $cv->id ? "selected" : null; ?> value="<?php echo $cv->id; ?>"><?php echo $cv->title; ?></option>
                        <?php } ?>
                        <?php ?>
                    </select>
                    <div class="row">
                        <div class="col">
                            <label for="">Latitude</label>
                            <input type="text" class="form-control my-2" name="lat" value="<?php echo $pd->lat??null; ?>">
                        </div>
                        <div class="col">
                            <label for="">Longitude</label>
                            <input type="text" class="form-control my-2" name="lon" value="<?php echo $pd->lon??null; ?>">
                        </div>
                    </div>
                    <textarea class="tinymce-editor" name="content" id="mce_0" aria-hidden="true"><?php echo $pd->content; ?></textarea>
                    <h4>Tags</h4>
                    <textarea class="form-control" name="meta_tags" aria-hidden="true"><?php echo $meta_tags; ?></textarea>
                    <h4>Meta description</h4>
                    <textarea class="form-control" name="meta_description" aria-hidden="true"><?php echo $meta_desc; ?></textarea>
                </div>
                <div class="col-md-4">
                    <h4>Banner</h4>
                    <input accept="image/*" id="image-input" type="file" name="banner" class="form-control my-3">
                    <img style="width:100%; max-height:300px; object-fit:contain;" id="banner" src="/<?php echo MEDIA_URL; ?>/images/pages/<?php echo $pd->banner; ?>" alt="<?php echo $pd->banner; ?>">
                    <div id="image-container"></div>
                    <button type="button" class="btn btn-secondary text-white mt-2" id="add-image">Images <i class="bi bi-plus"></i> </button>
                    <hr>
                    <?php
                        $imgs = get_image_list($pd->imgs);
                        $moreimgcount = count($imgs);
                        // myprint($imgs);
                    ?>
                    <h4>Total more images count <?php echo $moreimgcount; ?> </h4>
                    <div style="max-height: 200px; overflow-y:scroll; background-color: rgba(0,0,0,0.2);">
                        <?php
                        foreach ($imgs as $key => $img) { ?>
                            <button style="margin: 10px;" type="button" class="btn btn-danger delete-more-img" data-img-src="<?php echo $img; ?>" data-content-id="<?php echo $pd->id; ?>">Delete <i class="bi bi-arrow-down"></i></button>
                            <img style="width: 100%; padding: 10px;" src="/<?php echo MEDIA_URL; ?>/images/pages/<?php echo $img; ?>" alt="<?php echo $pd->title; ?>">
                            <hr>
                        <?php } ?>
                    </div>

                    <h4>Price/Unit</h4>
                    <input type="number" scope="any" name="price" value="<?php echo $pd->price; ?>" class="form-control my-3" placeholder="Price">

                    <h4>Min. Age</h4>
                    <input type="text" name="min_age" value="<?php echo $pd->min_age; ?>" class="form-control my-3" placeholder="Min age">

                    <h4>Max. People</h4>
                    <input type="text" name="max_people" value="<?php echo $pd->max_people; ?>" class="form-control my-3" placeholder="Max people">

                    <h4>Pickup</h4>
                    <input type="text" name="pickup" value="<?php echo $pd->pickup; ?>" class="form-control my-3" placeholder="Airport">

                    <h4>Languages</h4>
                    <input type="text" name="languages" value="<?php echo $pd->languages; ?>" class="form-control my-3" placeholder="Hindi, Arabic, English, Spanish">

                    <h4>No. of days for tours</h4>
                    <input type="number" scope="any" name="days" value="<?php echo $pd->days; ?>" class="form-control my-3" placeholder="Days for tours">

                    <h4>City</h4>
                    <input type="text" name="city" value="<?php echo $pd->city; ?>" class="form-control my-3" placeholder="City">

                    <div class="d-grid">
                        <button id="update-package-btn" type="button" class="btn btn-primary my-3">Update</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</form>
<script>
    window.onload = () => {

        const imageInputpackage = document.getElementById('image-input');
        const imagepackage = document.getElementById('banner');

        imageInputpackage.addEventListener('change', (event) => {
            const file = event.target.files[0];
            const fileReader = new FileReader();

            fileReader.onload = () => {
                imagepackage.src = fileReader.result;
            };

            fileReader.readAsDataURL(file);
        });

        // for slug
        const titleInput = document.querySelector('input[name="slug"]');
        const slugInput = document.querySelector('input[name="slug"]');
        if (titleInput && slugInput) {
            titleInput.addEventListener('keyup', () => {
                const title = titleInput.value.trim();
                generateSlug(title, slugInput);
            });
        }
    }
</script>
<script>
    $(document).ready(function () {
        // Attach a click event handler to the cat-items
        $('.delete-more-img').on('click', function () {
            var imgSrc = $(this).data('img-src');
            var contentId = $(this).data('content-id');
            // Make an AJAX request to the server
            $.ajax({
                url: '/<?php echo home.route('packageDeleteMoreImgAjax'); ?>', // Replace with your server URL
                type: 'POST', // You can change this to 'GET' if needed
                data: { content_id: contentId, img_src:imgSrc }, // Send the cat_id to the server
                success: function (res) {
                    if (res.success===true) {
                       alert(res.msg);
                       location.reload();
                    }else if (res.success===false){
                        alert(res.msg);
                    }else{
                        alert("Something went wrong");
                    }
                },
                error: function (error) {
                    console.error('AJAX error:', error);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#add-image').on('click', function() {
            // Create a new image input field
            var newInput = '<input accept="image/*" type="file" name="moreimgs[]" class="form-control my-3">';
            $('#image-container').append(newInput);
        });
    });
</script>
<?php pkAjax_form("#update-package-btn", "#update-new-package-form", "#res"); ?>