<script>
// Updated JavaScript for handling tags with PHP backend
  const tagInput = document.getElementById('tagInput');
  const tagsContainer = document.getElementById('tagsContainer');

  tagInput.addEventListener('keydown', function (event) {
    if (event.key === 'Enter' && this.value.trim() !== '') {
      const libraryId = 1; 
      const tagText = this.value.trim();

      // Make an AJAX request to add the tag
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'index.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
          // If the request is successful, add the tag to the frontend
          addTag(tagText);
        }
      };
      xhr.send(`tag=${tagText}&libraryId=${libraryId}`);

      this.value = ''; 
    }
  });

  function addTag(tagText) {
    const tagElement = document.createElement('div');
    tagElement.className = 'tag';
    tagElement.textContent = tagText;
    tagsContainer.appendChild(tagElement);
  }
</script>

