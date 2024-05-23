<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 800px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      color: #333;
    }
    .gallery {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .file-box {
      background: white;
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .file-box img, .file-box video {
      max-width: 100px;
      border-radius: 10px;
    }
    .file-box p {
      margin: 0;
      color: #555;
      flex-grow: 1;
      padding-left: 10px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .file-box button {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
    }
    .file-box button:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Gallery</h1>
    <div class="gallery" id="gallery"></div>
  </div>
  <script>
    async function fetchFiles() {
      const response = await fetch('get_files.php');
      const files = await response.json();
      const gallery = document.getElementById('gallery');
      gallery.innerHTML = '';

      files.forEach(file => {
        const fileBox = document.createElement('div');
        fileBox.className = 'file-box';

        let mediaElement;
        if (file.type === 'image') {
          mediaElement = document.createElement('img');
          mediaElement.src = file.path;
        } else if (file.type === 'video') {
          mediaElement = document.createElement('video');
          mediaElement.controls = true;
          const source = document.createElement('source');
          source.src = file.path;
          mediaElement.appendChild(source);
        } else {
          mediaElement = document.createElement('p');
          mediaElement.textContent = file.name;
        }

        const fileName = document.createElement('p');
        fileName.textContent = file.name;

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Hapus';
        deleteButton.onclick = () => deleteFile(file.name);

        fileBox.appendChild(mediaElement);
        fileBox.appendChild(fileName);
        fileBox.appendChild(deleteButton);
        gallery.appendChild(fileBox);
      });
    }

    async function deleteFile(fileName) {
      if (confirm('Apakah Anda yakin ingin menghapus file ini?')) {
        const response = await fetch('delete_file.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ name: fileName })
        });
        const result = await response.json();
        if (result.success) {
          fetchFiles();
        } else {
          alert('Gagal menghapus file.');
        }
      }
    }

    document.addEventListener('DOMContentLoaded', fetchFiles);
  </script>
</body>
</html>
