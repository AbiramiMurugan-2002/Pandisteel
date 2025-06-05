<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .icon-btn.plus-btn {
            border: none;
            border-radius: 4px;
            width: 44px;
            height: 44px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
            margin-left: 0;
        }
        .section-heading,
        .description-box {
            border: none !important;
            box-shadow: none !important;
            background: transparent !important;
        }
        .section-heading:empty:before {
            content: attr(data-placeholder);
            color: #bbb;
            pointer-events: none;
            display: block;
        }
        .section-heading:focus:empty:before,
        .description-box:focus:empty:before {
            content: '';
        }
        .hidden {
            display: none !important;
        }
        .img-preview {
            max-width: 100%;
            max-height: 300px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container my-5">
    <h2 class="mb-4 text-center">Edit Blog</h2>
    <form method="POST"
          action="{{ route('blog-update', $blog->id) }}"
          enctype="multipart/form-data"
          id="blogForm"
          style="max-width:700px;margin:60px auto;">
        @csrf
        @method('PUT')
        <input type="hidden" name="is_published" id="is_published" value="{{ $blog->is_published ? 1 : 0 }}">
        <div id="sections"></div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-success btn-lg" id="submitBtn">
                Update
            </button>
        </div>
    </form>
</div>

<script>
window.existingSections = @json($blog->descriptions->sortBy('priority')->values());
window.isEdit = true;

function addHeadingBlock(container, value = '', showPlus = true, bold = false, afterBlock = null) {
    const block = document.createElement('div');
    block.className = 'section-block mb-3';
    const headingDiv = document.createElement('div');
    headingDiv.className = 'form-control section-heading';
    headingDiv.contentEditable = true;
    headingDiv.dataset.placeholder = container.childElementCount === 0 ? 'Title' : 'Heading';
    headingDiv.style.fontWeight = bold ? 'bold' : 'bold';
    headingDiv.style.fontSize = '2rem';
    headingDiv.style.outline = 'none';
    headingDiv.style.cursor = 'text';
    headingDiv.style.minHeight = '38px';
    headingDiv.innerHTML = value;
    block.appendChild(headingDiv);
    if (afterBlock) {
        container.insertBefore(block, afterBlock.nextSibling);
    } else {
        container.appendChild(block);
    }
    if (showPlus) addPlusButton(container, block);
    headingDiv.addEventListener('focus', function() {
        if (!block.querySelector('.plus-btn')) addPlusButton(container, block);
    });
    headingDiv.addEventListener('blur', function() {
        setTimeout(() => {
            const plusBtn = block.querySelector('.plus-btn');
            if (plusBtn) plusBtn.remove();
        }, 100);
    });
    headingDiv.focus();
    return block;
}

function addParagraphBlock(container, value = '', showPlus = false, afterBlock = null) {
    const block = document.createElement('div');
    block.className = 'section-block mb-3';
    const paraDiv = document.createElement('div');
    paraDiv.className = 'form-control description-box';
    paraDiv.contentEditable = true;
    paraDiv.dataset.placeholder = 'Write here...';
    paraDiv.style.fontSize = '1.2rem';
    paraDiv.style.outline = 'none';
    paraDiv.style.cursor = 'text';
    paraDiv.style.minHeight = '38px';
    paraDiv.innerHTML = value;
    block.appendChild(paraDiv);
    if (afterBlock) {
        container.insertBefore(block, afterBlock.nextSibling);
    } else {
        container.appendChild(block);
    }
    if (showPlus) addPlusButton(container, block);
    paraDiv.addEventListener('focus', function() {
        if (!block.querySelector('.plus-btn')) addPlusButton(container, block);
    });
    paraDiv.addEventListener('blur', function() {
        setTimeout(() => {
            const plusBtn = block.querySelector('.plus-btn');
            if (plusBtn) plusBtn.remove();
        }, 100);
    });
    paraDiv.focus();
    return block;
}

function addImageBlock(container, file = null, imagePath = '', showPlus = false, afterBlock = null) {
    const block = document.createElement('div');
    block.className = 'section-block mb-3';

    const imageInput = document.createElement('input');
    imageInput.type = 'file';
    imageInput.accept = 'image/*';
    imageInput.className = 'form-control mt-2';

    const imgPreview = document.createElement('img');
    imgPreview.className = 'img-preview hidden';
    imgPreview.tabIndex = 0; // make focusable for keyboard events

    block.appendChild(imageInput);
    block.appendChild(imgPreview);

    if (afterBlock) {
        container.insertBefore(block, afterBlock.nextSibling);
    } else {
        container.appendChild(block);
    }

    if (imagePath) {
        imgPreview.src = imagePath.startsWith('data:') ? imagePath : '/' + imagePath;
        imgPreview.classList.remove('hidden');
        imageInput.classList.add('hidden');
    }

    if (showPlus) addPlusButton(container, block);

    imgPreview.addEventListener('focus', function() {
        if (!block.querySelector('.plus-btn')) addPlusButton(container, block);
    });

    imgPreview.addEventListener('blur', function() {
        setTimeout(() => {
            const plusBtn = block.querySelector('.plus-btn');
            if (plusBtn) plusBtn.remove();
        }, 100);
    });

    imageInput.addEventListener('change', function() {
        if (imageInput.files && imageInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imgPreview.src = e.target.result;
                imgPreview.classList.remove('hidden');
            };
            reader.readAsDataURL(imageInput.files[0]);
            imageInput.classList.add('hidden');
        }
    });

    // Delete image block on Delete or Backspace key press
    imgPreview.addEventListener('keydown', function(e) {
        if (e.key === 'Delete' || e.key === 'Backspace') {
            e.preventDefault();
            block.remove();
        }
    });

    return block;
}

function addPlusButton(container, afterBlock) {
    const existing = container.querySelector('.plus-btn');
    if (existing) existing.remove();
    const plusBtn = document.createElement('button');
    plusBtn.type = 'button';
    plusBtn.className = 'icon-btn plus-btn mb-3 btn btn-outline-primary';
    plusBtn.textContent = '+';
    plusBtn.onclick = function() {
        plusBtn.remove();
        addSectionMenu(container, afterBlock);
    };
    if (afterBlock) {
        container.insertBefore(plusBtn, afterBlock.nextSibling);
    } else {
        container.insertBefore(plusBtn, container.firstChild);
    }
}

function addSectionMenu(container, afterBlock) {
    const oldMenu = container.querySelector('.add-menu');
    if (oldMenu) oldMenu.remove();
    const menu = document.createElement('div');
    menu.className = 'add-menu d-flex mb-3';
    const headingBtn = document.createElement('button');
    headingBtn.type = 'button';
    headingBtn.className = 'btn btn-outline-secondary me-2';
    headingBtn.textContent = 'Heading';
    const boldBtn = document.createElement('button');
    boldBtn.type = 'button';
    boldBtn.className = 'btn btn-outline-secondary me-2';
    boldBtn.textContent = 'Bold';
    const paraBtn = document.createElement('button');
    paraBtn.type = 'button';
    paraBtn.className = 'btn btn-outline-secondary me-2';
    paraBtn.textContent = 'Paragraph';
    const imgBtn = document.createElement('button');
    imgBtn.type = 'button';
    imgBtn.className = 'btn btn-outline-secondary';
    imgBtn.textContent = 'Image';
    menu.appendChild(headingBtn);
    menu.appendChild(boldBtn);
    menu.appendChild(paraBtn);
    menu.appendChild(imgBtn);
    if (afterBlock) {
        container.insertBefore(menu, afterBlock.nextSibling);
    } else {
        container.insertBefore(menu, container.firstChild);
    }

    headingBtn.onclick = function() {
        menu.remove();
        addHeadingBlock(container, '', true, false, afterBlock);
    };
    boldBtn.onclick = function() {
        menu.remove();
        addHeadingBlock(container, '', true, true, afterBlock);
    };
    paraBtn.onclick = function() {
        menu.remove();
        addParagraphBlock(container, '', true, afterBlock);
    };
    imgBtn.onclick = function() {
        menu.remove();
        addImageBlock(container, null, '', true, afterBlock);
    };
}

// Render existing sections for edit
document.addEventListener('DOMContentLoaded', function() {
    const sectionsDiv = document.getElementById('sections');
    if (window.isEdit && window.existingSections.length > 0) {
        let lastBlock = null;
        window.existingSections.forEach(function(section) {
            let block;
            if (section.type === 'heading') {
                block = addHeadingBlock(sectionsDiv, section.content, false, false, lastBlock);
            } else if (section.type === 'paragraph') {
                block = addParagraphBlock(sectionsDiv, section.content, false, lastBlock);
            } else if (section.type === 'image') {
                block = addImageBlock(sectionsDiv, null, section.content, false, lastBlock);
            }
            addPlusButton(sectionsDiv, block);
            lastBlock = block;
        });
    }
});

// Improved submit handler
document.getElementById('blogForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Remove old hidden inputs before appending new ones
    document.querySelectorAll('.hidden-data').forEach(el => el.remove());

    const sections = document.querySelectorAll('.section-block');
    let validSectionCount = 0;
    const form = e.target;

    sections.forEach((section, index) => {
        let type, content;
        const headingDiv = section.querySelector('.section-heading[contenteditable="true"]');
        const paraDiv = section.querySelector('.description-box[contenteditable="true"]');
        const imgPreview = section.querySelector('.img-preview');
        const imageInput = section.querySelector('input[type="file"]');

        if (headingDiv && headingDiv.innerText.trim() !== '') {
            type = 'heading';
            content = headingDiv.innerText.trim();
        } else if (paraDiv && paraDiv.innerText.trim() !== '') {
            type = 'paragraph';
            content = paraDiv.innerText.trim();
        } else if (imgPreview && imgPreview.src && !imgPreview.classList.contains('hidden')) {
            type = 'image';
            // Preserve image src relative path or base64
            content = imgPreview.src.startsWith('data:') ? imgPreview.src : imgPreview.src.replace(window.location.origin + '/', '');
        } else {
            // Skip empty sections
            return;
        }

        validSectionCount++;

        // Hidden input for type
        const inputType = document.createElement('input');
        inputType.type = 'hidden';
        inputType.name = `descriptions[${index}][type]`;
        inputType.value = type;
        inputType.classList.add('hidden-data');
        form.appendChild(inputType);

        // Hidden input for content (text or image path)
        const inputContent = document.createElement('input');
        inputContent.type = 'hidden';
        inputContent.name = `descriptions[${index}][content]`;
        inputContent.value = content;
        inputContent.classList.add('hidden-data');
        form.appendChild(inputContent);

        // Hidden input for priority (order)
        const inputPriority = document.createElement('input');
        inputPriority.type = 'hidden';
        inputPriority.name = `descriptions[${index}][priority]`;
        inputPriority.value = index + 1;
        inputPriority.classList.add('hidden-data');
        form.appendChild(inputPriority);

        // Append the image file input if a new file is selected (upload new image)
        if (type === 'image' && imageInput && imageInput.files.length > 0) {
            imageInput.name = `descriptions[${index}][image_file]`;
            form.appendChild(imageInput);
        }
    });

    if (validSectionCount > 0) {
        e.target.submit();
    } else {
        alert('Please add at least one section before submitting.');
    }
});
</script>
</body>
</html>
