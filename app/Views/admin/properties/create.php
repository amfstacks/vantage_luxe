<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="max-w-7xl mx-auto">
    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">

        <!-- Header -->
        <div class="px-8 py-7 bg-gradient-to-r from-indigo-600 to-indigo-800 text-white">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight">Add New Property</h2>
            <p class="mt-2 text-indigo-100 opacity-90">
                Fill in the details to list a new property on Vantage Luxe
            </p>
        </div>

        <!-- Form -->
        <form action="<?= site_url('admin/properties/store') ?>" method="post" enctype="multipart/form-data" id="propertyForm" class="p-8 md:p-10">
            <?= csrf_field() ?>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <!-- Left + Middle Column -->
                <div class="lg:col-span-2 space-y-10">

                    <!-- Title -->
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Property Title <span class="text-red-500">*</span></label>
                        <input type="text" name="title" required class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all shadow-sm">
                    </div>

                    <!-- Type / Listing / Status -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Property Type</label>
                            <select name="type" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 bg-white">
                                <option value="apartment">Apartment</option>
                                <option value="house">House</option>
                                <option value="villa">Villa</option>
                                <option value="land">Land</option>
                                <option value="commercial">Commercial</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Listing Type</label>
                            <select name="listing_type" id="listingType" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 bg-white">
                                <option value="sale">For Sale</option>
                                <option value="rent">For Rent</option>
                                <option value="shortlet">Shortlet</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Status</label>
                            <select name="status" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 bg-white">
                                <option value="draft">Draft</option>
                                <option value="pending">Pending Approval</option>
                                <option value="published" selected>Published</option>
                                <option value="featured">Featured</option>
                            </select>
                        </div>
                    </div>

                    <!-- Rooms & Area -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Bedrooms</label>
                            <input type="number" name="bedrooms" min="0" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Bathrooms</label>
                            <input type="number" name="bathrooms" min="0" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Toilets</label>
                            <input type="number" name="toilets" min="0" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Area (sqm)</label>
                            <input type="number" name="area" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                    </div>

                    <!-- Amenities with Select All -->
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-semibold text-gray-900">Amenities</h3>
                            <button type="button" id="toggleAllAmenities" 
                                    class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition">
                                Select All
                            </button>
                        </div>

                        <?php
                        $amenityModel = model('AmenityModel');
                        $allAmenities = $amenityModel->getActiveSorted();
                        ?>

                        <?php if (empty($allAmenities)): ?>
                            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-5 rounded-lg">
                                <p class="text-yellow-700">No amenities created yet.</p>
                                <a href="<?= site_url('admin/amenities/create') ?>" class="text-indigo-600 hover:underline mt-2 inline-block">
                                    → Create amenities first
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="amenitiesGrid">
                                <?php foreach ($allAmenities as $am): ?>
                                <label class="flex items-center gap-4 p-4 bg-white border border-gray-200 rounded-xl hover:border-indigo-300 cursor-pointer transition group">
                                    <input type="checkbox" name="amenities[]" value="<?= $am['id'] ?>" class="w-5 h-5 accent-indigo-600">
                                    <div class="flex items-center gap-3">
                                        <i class="<?= esc($am['icon']) ?> text-2xl text-gray-600 group-hover:text-indigo-600 transition"></i>
                                        <span class="font-medium text-gray-800"><?= esc($am['name']) ?></span>
                                    </div>
                                </label>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Pricing -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Pricing</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">Price (₦) <span class="text-red-500">*</span></label>
                                <input type="number" name="price" required step="0.01" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="space-y-2" id="cautionField">
                                <label class="block text-sm font-semibold text-gray-700">Caution Deposit (₦)</label>
                                <input type="number" name="caution_deposit" step="0.01" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                        </div>
                        <div class="space-y-2" id="ratePeriodGroup">
                            <label class="block text-sm font-semibold text-gray-700">Rate Period</label>
                            <select name="rate_period" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 bg-white">
                                <option value="night">Per Night</option>
                                <option value="month">Per Month</option>
                                <option value="year">Per Year</option>
                            </select>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Full Description</label>
                        <textarea name="description" id="summernote" class="w-full rounded-xl border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 min-h-[320px]"></textarea>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-10">

                    <!-- Location -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Location</h3>
                        <div class="space-y-4">
                            <input type="text" name="address" placeholder="Full address (street, number)" 
                                   class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
                            <div class="grid grid-cols-2 gap-4">
                                <input type="text" name="city" placeholder="City" value="Abuja" 
                                       class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
                                <input type="text" name="area" placeholder="Area (Garki, Maitama...)" 
                                       class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                        </div>
                    </div>

                    <!-- Media Upload – Enhanced -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Media</h3>

                        <!-- Images -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Property Images (multiple)</label>
                            <input type="file" name="images[]" multiple accept="image/*" id="imageInput"
                                   class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-6 file:rounded-xl file:border-0 file:text-sm file:font-medium file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition">
                            <div id="imagePreview" class="mt-6 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4"></div>
                        </div>

                        <!-- Video -->
                        <div class="space-y-3">
                            <label class="block text-sm font-semibold text-gray-700">Video (YouTube URL or file)</label>
                            <input type="url" name="video_url" placeholder="https://youtube.com/..." 
                                   class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
                            <input type="file" name="video_file" accept="video/*" 
                                   class="mt-2 block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-6 file:rounded-xl file:border-0 file:text-sm file:font-medium file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="pt-8 border-t border-gray-200">
                        <button type="submit" 
                                class="w-full px-10 py-5 bg-indigo-600 text-white font-semibold text-lg rounded-xl hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 transition shadow-lg hover:shadow-xl">
                            Save & Publish Property
                        </button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?><?= $this->section('extraScripts') ?>
<script>
$(document).ready(function() {
    // Summernote (unchanged)
    $('#summernote').summernote({
        height: 340,
        placeholder: 'Describe the property in detail — features, location benefits, interior, surroundings...',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture']],
            ['view', ['fullscreen', 'codeview']]
        ]
    });

    // Conditional pricing fields (unchanged)
    $('#listingType').change(function() {
        if ($(this).val() === 'sale') {
            $('#cautionField, #ratePeriodGroup').addClass('hidden');
        } else {
            $('#cautionField, #ratePeriodGroup').removeClass('hidden');
        }
    }).trigger('change');

    // Image handling
    let selectedFiles = [];

    $('#imageInput').on('change', function() {
        const newFiles = Array.from(this.files);
        selectedFiles = [...selectedFiles, ...newFiles]; // append new files

        renderImagePreviews();
    });

    function renderImagePreviews() {
        $('#imagePreview').html('');

        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgSrc = e.target.result;
                $('#imagePreview').append(`
                    <div class="relative group cursor-pointer" data-index="${index}">
                        <img src="${imgSrc}" class="h-32 w-32 object-cover rounded-xl border border-gray-300 shadow-md transition group-hover:scale-105 group-hover:shadow-lg">
                        <button type="button" class="delete-image absolute top-2 right-2 bg-red-500 text-white text-xs w-7 h-7 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition shadow-md hover:bg-red-600">
                            ×
                        </button>
                    </div>
                `);
            };
            reader.readAsDataURL(file);
        });
    }

    // Delete single image
    $(document).on('click', '.delete-image', function(e) {
        e.stopPropagation();
        const index = $(this).parent().data('index');
        selectedFiles.splice(index, 1);
        renderImagePreviews();

        // Update real file input (important for submit)
        const dt = new DataTransfer();
        selectedFiles.forEach(file => dt.items.add(file));
        $('#imageInput')[0].files = dt.files;
    });

    // Open modal carousel when clicking any preview image
    $(document).on('click', '#imagePreview > div', function(e) {
        e.preventDefault();
        const startIndex = $(this).data('index');

        const modal = $(`
            <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 z-50 flex items-center justify-center">
                <button class="close-modal absolute top-6 right-8 text-white text-5xl hover:text-gray-300 transition">&times;</button>
                
                <button class="nav-prev absolute left-6 top-1/2 transform -translate-y-1/2 text-white text-6xl hover:text-gray-300 transition opacity-70 hover:opacity-100">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div class="relative max-w-[90%] max-h-[90vh] overflow-hidden">
                    <img id="modalImage" src="" class="max-w-full max-h-[90vh] object-contain rounded-xl shadow-2xl transition-all duration-300">
                </div>
                
                <button class="nav-next absolute right-6 top-1/2 transform -translate-y-1/2 text-white text-6xl hover:text-gray-300 transition opacity-70 hover:opacity-100">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        `);

        $('body').append(modal);

        let currentIndex = startIndex;

        function showImage(index) {
            if (index < 0 || index >= selectedFiles.length) return;
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#modalImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(selectedFiles[index]);
            currentIndex = index;
        }

        showImage(currentIndex);

        // Navigation
        modal.find('.nav-prev').click(() => showImage(currentIndex - 1));
        modal.find('.nav-next').click(() => showImage(currentIndex + 1));

        // Close modal
        modal.find('.close-modal, #imageModal').click(function(e) {
            if (e.target === this || e.target.classList.contains('close-modal')) {
                modal.remove();
            }
        });

        // Keyboard arrows
        $(document).on('keydown.modalNav', function(e) {
            if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
            if (e.key === 'ArrowRight') showImage(currentIndex + 1);
            if (e.key === 'Escape') modal.remove();
        });

        // Cleanup keyboard listener when modal closes
        modal.on('remove', () => $(document).off('keydown.modalNav'));
    });
    $('#toggleAllAmenities').click(function(e) {
        e.preventDefault();
        const checkboxes = $('#amenitiesGrid input[type="checkbox"]');
        const allChecked = checkboxes.length === checkboxes.filter(':checked').length;

        checkboxes.prop('checked', !allChecked);
        $(this).text(allChecked ? 'Select All' : 'Deselect All');
    });
});
</script>
<?= $this->endSection() ?>