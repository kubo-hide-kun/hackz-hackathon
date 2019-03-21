(function() {
    var elDrop = document.getElementById('dropzone');
    var file;

	elDrop.addEventListener('dragover', function(event) {
        event.preventDefault();
        event.dataTransfer.dropEffect = 'copy';
        showDropping();
	});

	elDrop.addEventListener('dragleave', function(event) {
        hideDropping();
	});

	elDrop.addEventListener('drop', function(event) {
        event.preventDefault();

        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.dataTransfer.files[0]);
        file = event.dataTransfer.files[0]

        hideDropping();
	});

	function showDropping() {
        elDrop.classList.add('dropover');
	}

	function hideDropping() {
        elDrop.classList.remove('dropover');
	}
})();