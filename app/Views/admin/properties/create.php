<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white">
                <h4 class="mb-0">Add New Property</h4>
            </div>
            <div class="card-body">

                <form action="<?= site_url('admin/properties/store') ?>" method="post" enctype="multipart/form-data" id="propertyForm">
                    <?= csrf_field() ?>

                    <div class="row">
                        <!-- Basic Info -->
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label class="form-label">Property Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Property Type</label>
                                    <select name="type" class="form-select">
                                        <option value="apartment">Apartment</option>
                                        <option value="house">House</option>
                                        <option value="villa">Villa</option>
                                        <option value="land">Land</option>
                                        <option value="commercial">Commercial</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Listing Type</label>
                                    <select name="listing_type" class="form-select" id="listingType">
                                        <option value="sale">For Sale</option>
                                        <option value="rent">For Rent</option>
                                        <option value="shortlet">Shortlet</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="draft">Draft</option>
                                        <option value="pending">Pending Approval</option>
                                        <option value="published" selected>Published</option>
                                        <option value="featured">Featured</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row g-3 mt-3">
                                <div class="col-md-3">
                                    <label class="form-label">Bedrooms</label>
                                    <input type="number" name="bedrooms" class="form-control" min="0">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Bathrooms</label>
                                    <input type="number" name="bathrooms" class="form-control" min="0">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Toilets</label>
                                    <input type="number" name="toilets" class="form-control" min="0">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Area (sqm)</label>
                                    <input type="number" name="area" class="form-control">
                                </div>
                            </div>

                            <!-- Pricing -->
                            <div class="mt-4">
                                <h6 class="mb-3">Pricing</h6>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Price (₦)</label>
                                        <input type="number" name="price" class="form-control" required step="0.01">
                                    </div>
                                    <div class="col-md-6" id="cautionField">
                                        <label class="form-label">Caution Deposit (₦)</label>
                                        <input type="number" name="caution_deposit" class="form-control" step="0.01">
                                    </div>
                                </div>
                                <div class="mt-3" id="ratePeriodGroup">
                                    <label class="form-label">Rate Period</label>
                                    <select name="rate_period" class="form-select">
                                        <option value="night">Per Night</option>
                                        <option value="month">Per Month</option>
                                        <option value="year">Per Year</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-4">
                                <label class="form-label">Full Description</label>
                                <textarea name="description" id="summernote" class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Right column -->
                        <div class="col-md-4">
                            <!-- Location, Amenities, Media upload fields remain the same -->
                            <!-- ... copy your existing fields here ... -->

                            <div class="mt-4 text-end">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    Save Property
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('extraScripts') ?>
<script>
$(document).ready(function() {
    $('#summernote').summernote({
        height: 300,
        placeholder: 'Write detailed property description here...'
    });

    $('#listingType').change(function() {
        if ($(this).val() === 'sale') {
            $('#cautionField, #ratePeriodGroup').hide();
        } else {
            $('#cautionField, #ratePeriodGroup').show();
        }
    });

    $('input[name="images[]"]').on('change', function() {
        $('#imagePreview').html('');
        const files = this.files;
        for (let file of files) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').append(
                    `<img src="${e.target.result}" class="img-thumbnail me-2 mb-2" style="max-width:120px;">`
                );
            };
            reader.readAsDataURL(file);
        }
    });
});
</script>
<?= $this->endSection() ?>