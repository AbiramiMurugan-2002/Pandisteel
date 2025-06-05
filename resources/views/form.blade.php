<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hidden { display: none !important; }
        .icon-btn, .b-btn {
            font-size: 30px;
            border: none;
            padding: 0 12px;
            margin-left: 8px;
            border-radius: 4px;
            cursor: pointer;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        input, textarea {
            border: none !important;
            color: grey !important;
            font-size: 30px !important;
            font-weight: 100 !important;
            margin-bottom: 10px;
            background: transparent !important;
        }
        input.bold-title {
            font-weight: bold !important;
        }
        input:focus, textarea:focus {
            box-shadow: none !important;
            border-color: #ced4da !important;
        }
        .section-block { margin-bottom: 1.5rem; }
        .img-preview {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            max-height: 300px;
            /* No border, no background, no placeholder */
        }
        .submit-top-right {
            position: fixed;
            top: 24px;
            right: 32px;
            z-index: 999;
        }
        .add-menu {
            display: flex;
            margin-bottom: 1rem;
        }
        .add-menu button {
            margin-right: 0.5rem;
        }
        .section-heading,
        .description-box {
            border: none !important;
            background: transparent !important;
            box-shadow: none !important;
            outline: none !important;
            font-size: 2rem;
            font-weight: 400;
            color: #222;
            margin-bottom: 1.5rem;
            padding: 0;
            min-height: 38px;
        }
        .section-heading { font-size: 2rem; font-weight: bold; }
        .description-box { font-size: 1.2rem; font-weight: 400; }
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
    </style>
</head>
<body>
    <form method="POST"
        action="{{ route('blog-store') }}"
        enctype="multipart/form-data"
        id="blogForm"
        style="max-width:700px;margin:60px auto;">
        @csrf
        <input type="hidden" name="is_published" id="is_published" value="1">
        <button type="submit" class="btn btn-success submit-top-right" id="submitBtn">
            Save and Publish
        </button>
        <div id="sections"></div>
    </form>

    <script>
    function createSection(isFirst = false) {
        const section = document.createElement('div');
        section.classList.add('section-block', 'd-flex', 'align-items-center');

        // + button (always visible for non-title sections)
        const plusBtn = document.createElement('button');
        plusBtn.type = 'button';
        plusBtn.className = 'icon-btn me-2 plus-btn'; // always visible, even for title
        plusBtn.title = 'Add Content';
        plusBtn.textContent = '+';

        // Heading input (hidden initially unless first section)
        const headingInput = document.createElement('input');
        headingInput.type = 'text';
        headingInput.name = 'headings[]';
        headingInput.className = 'form-control section-heading' + (isFirst ? '' : ' hidden');
        headingInput.required = !isFirst;
        if (isFirst) headingInput.placeholder = 'Title';

        // Bold button (hidden initially)
        const boldBtn = document.createElement('button');
        boldBtn.type = 'button';
        boldBtn.className = 'b-btn ms-2 hidden';
        boldBtn.title = 'Bold Heading';
        boldBtn.textContent = 'B';

        // Image icon button (hidden initially)
        const imgBtn = document.createElement('button');
        imgBtn.type = 'button';
        imgBtn.className = 'icon-btn ms-2 img-btn hidden';
        imgBtn.title = 'Add Image';
        imgBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4.502 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-7zm0-1h7A2 2 0 0 1 13.5 2v12a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V2A2 2 0 0 1 4.5 0z"/>
            <path d="M10.648 8.646a.5.5 0 0 1 .704.708l-2.5 2.5a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708l1.146 1.147 2.146-2.147z"/>
        </svg>`;

        // File input (hidden)
        const imageInput = document.createElement('input');
        imageInput.type = 'file';
        imageInput.name = 'images[]';
        imageInput.accept = 'image/*';
        imageInput.className = 'form-control mt-2 hidden';

        // Image preview (hidden initially)
        const imgPreview = document.createElement('img');
        imgPreview.className = 'img-preview hidden';
        imgPreview.tabIndex = 0;

        // Add to section (order: +, heading, bold, image icon, file, preview)
        section.appendChild(plusBtn);
        section.appendChild(headingInput);
        section.appendChild(boldBtn);
        section.appendChild(imgBtn);
        section.appendChild(imageInput);
        section.appendChild(imgPreview);

        // + icon: show heading input, bold, and image icon, focus heading
        plusBtn.addEventListener('click', function() {
            headingInput.classList.remove('hidden');
            boldBtn.classList.remove('hidden');
            imgBtn.classList.remove('hidden');
            headingInput.focus();
            plusBtn.classList.add('hidden');
        });

        // Show + icon when heading input is focused (if not disabled)
        headingInput.addEventListener('focus', function() {
            if (!headingInput.disabled && !isFirst) {
                plusBtn.classList.remove('hidden');
            }
        });

        // Hide + icon when heading input loses focus (unless moving to +/B/image)
        headingInput.addEventListener('blur', function() {
            setTimeout(() => {
                if (
                    document.activeElement !== plusBtn &&
                    document.activeElement !== boldBtn &&
                    document.activeElement !== imgBtn
                ) {
                    if (!headingInput.disabled && !isFirst) {
                        plusBtn.classList.add('hidden');
                    }
                }
            }, 10);
        });

        // Bold button toggles bold class
        boldBtn.addEventListener('click', function(e) {
            e.preventDefault();
            headingInput.focus();
            document.execCommand('bold', false, null);
        });

        // When heading input gets value and Enter is pressed, lock input and show next +
        headingInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && headingInput.value.trim() !== '') {
                e.preventDefault();
                headingInput.disabled = true;
                boldBtn.classList.add('hidden');   // Hide bold button
                imgBtn.classList.add('hidden');    // Hide image button (was .remove('hidden') before)
                // Add next section with only + icon
                addSection();
            }
        });

        // Image icon shows file input
        imgBtn.addEventListener('click', function() {
            imageInput.classList.remove('hidden');
            imageInput.click();
        });

        // After file chosen, show image centered, hide input and icons, add next section
        imageInput.addEventListener('change', function() {
            if (imageInput.files && imageInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imgPreview.src = e.target.result;
                    imgPreview.classList.remove('hidden');
                };
                reader.readAsDataURL(imageInput.files[0]);
                imageInput.classList.add('hidden');
                // Add next section with only + icon
                addSection();
            }
        });

        // Delete image on Delete key when image is focused
        imgPreview.addEventListener('keydown', function(e) {
            if (e.key === 'Delete') {
                imgPreview.src = '';
                imgPreview.classList.add('hidden');
                imgBtn.classList.remove('hidden');
                headingInput.classList.remove('hidden');
                boldBtn.classList.remove('hidden');
                imageInput.value = '';
            }
        });

        // Click image to focus for delete
        imgPreview.addEventListener('click', function() {
            imgPreview.focus();
        });

        return section;
    }

    function addSection(isFirst = false) {
        const sectionsDiv = document.getElementById('sections');
        const section = createSection(isFirst);
        sectionsDiv.appendChild(section);
        // Focus only for first section (title)
        if (isFirst) section.querySelector('.section-heading').focus();
        // Show submit button if more than 0 sections
        // document.getElementById('submitBtn').classList.remove('hidden');
    }

    function addSectionMenu(container, afterBlock) {
        // Remove any existing menu
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
        container.appendChild(menu);

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
        headingDiv.innerText = value;

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
    }

    function addParagraphBlock(container, value = '', showPlus = true, afterBlock = null) {
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

        paraDiv.innerText = value;

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
    }

    function addImageBlock(container, file = null, imagePath = '', showPlus = true, afterBlock = null) {
        const block = document.createElement('div');
        block.className = 'section-block mb-3';
        const imageInput = document.createElement('input');
        imageInput.type = 'file';
        imageInput.accept = 'image/*';
        imageInput.className = 'form-control mt-2';
        const imgPreview = document.createElement('img');
        imgPreview.className = 'img-preview hidden';
        imgPreview.tabIndex = 0;
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

        imageInput.addEventListener('change', function() {
            if (imageInput.files && imageInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imgPreview.src = e.target.result;
                    imgPreview.classList.remove('hidden');
                };
                reader.readAsDataURL(imageInput.files[0]);
                imageInput.classList.add('hidden');
                addPlusButton(container, block);
            }
        });
    

        // Store the file input for submission
        block._imageInput = imageInput;
    }

    function addPlusButton(container, afterBlock) {
        // Remove any existing plus button in the container
        const existing = container.querySelector('.plus-btn');
        if (existing) existing.remove();

        const plusBtn = document.createElement('button');
        plusBtn.type = 'button';
        plusBtn.className = 'icon-btn plus-btn mb-3';
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

    // Initial render for create mode only
    document.addEventListener('DOMContentLoaded', function() {
        const sectionsDiv = document.getElementById('sections');
        addHeadingBlock(sectionsDiv, '', true); // This will set placeholder to "Title"
    });

    document.getElementById('blogForm').addEventListener('submit', function(e) {
        e.preventDefault();
        document.querySelectorAll('.hidden-data').forEach(el => el.remove());
        const sections = document.querySelectorAll('.section-block');
        let validSectionCount = 0;
        sections.forEach((section, index) => {
            let type, content;
            const headingDiv = section.querySelector('.section-heading[contenteditable="true"]');
            const paraDiv = section.querySelector('.description-box[contenteditable="true"]');
            const imgPreview = section.querySelector('.img-preview');
            if (headingDiv && headingDiv.innerText.trim() !== '') {
                type = 'heading';
                content = headingDiv.innerText.trim();
            } else if (paraDiv && paraDiv.innerText.trim() !== '') {
                type = 'paragraph';
                content = paraDiv.innerText.trim();
            } else if (imgPreview && imgPreview.src && !imgPreview.classList.contains('hidden')) {
                type = 'image';
                content = ''; // Leave content empty, file will be uploaded
            } else {
                return;
            }
            validSectionCount++;
            const form = e.target;
            const inputType = document.createElement('input');
            inputType.type = 'hidden';
            inputType.name = 'descriptions[' + index + '][type]';
            inputType.value = type;
            inputType.classList.add('hidden-data');
            form.appendChild(inputType);

            const inputContent = document.createElement('input');
            inputContent.type = 'hidden';
            inputContent.name = 'descriptions[' + index + '][content]';
            inputContent.value = content;
            inputContent.classList.add('hidden-data');
            form.appendChild(inputContent);

            const inputPriority = document.createElement('input');
            inputPriority.type = 'hidden';
            inputPriority.name = 'descriptions[' + index + '][priority]';
            inputPriority.value = index + 1;
            inputPriority.classList.add('hidden-data');
            form.appendChild(inputPriority);

            // Append the file input for image sections
            if (type === 'image') {
                if (section._imageInput && section._imageInput.files.length > 0) {
                    section._imageInput.name = 'descriptions[' + index + '][image_file]';
                    form.appendChild(section._imageInput); // Move the original input to the form
                } else {
                    return;
                }
            }
        });
        if (validSectionCount > 0) {
            e.target.submit();
        } else {
            alert('Please add at least one section before submitting.');
        }
        console.log([...form.querySelectorAll('input[type="file"]')]);
    });
    </script>
</body>
</html>