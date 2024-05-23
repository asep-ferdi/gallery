<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <style>
    body {
      font-family: 'Helvetica Neue', Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 20px;
      scroll-behavior: smooth;
    }
    .container {
      max-width: 900px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      color: #343a40;
      margin-bottom: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
      position: relative;
    }
    form input[type="text"], form input[type="file"], form button {
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #ced4da;
      font-size: 16px;
    }
    form button {
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    form button:hover {
      background-color: #0056b3;
    }
    .gallery {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-top: 20px;
    }
    .media-box {
      background: white;
      padding: 15px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
      position: relative;
      transition: transform 0.3s ease;
    }
    .media-box:hover {
      transform: translateY(-5px);
    }
    .media-box img, .media-box video {
      max-width: 100%;
      border-radius: 8px;
      cursor: pointer;
      transition: box-shadow 0.3s ease;
    }
    .media-box img:hover, .media-box video:hover {
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    .media-box p {
      margin: 0;
      color: #6c757d;
      display: none;
      font-size: 14px;
    }
    .download-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      text-decoration: none;
      color: #007bff;
      border: 1px solid #007bff;
      padding: 6px 12px;
      border-radius: 8px;
      display: none;
      transition: background-color 0.3s ease;
    }
    .download-btn:hover {
      background-color: #007bff;
      color: white;
    }
    .loading-spinner {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 50px;
      height: 50px;
      margin-top: -25px;
      margin-left: -25px;
      border: 8px solid #f3f3f3;
      border-top: 8px solid #3498db;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      display: none;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .uploading-text {
      position: absolute;
      top: 50%;
      left: calc(50% + 35px);
      transform: translateY(-50%);
      color: #6c757d;
      font-size: 16px;
      display: none;
    }
    .file-input-wrapper {
      display: flex;
      align-items: center;
      gap: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Gallery</h1>
    <form id="upload-form" action="upload.php" method="POST" enctype="multipart/form-data">
      <div class="file-input-wrapper">
        <label for="media-upload" style="display: none;">Pilih Media</label>
        <input type="file" name="files[]" accept="image/*,video/*" multiple id="media-upload" style="display: none;">
        <button type="button" onclick="document.getElementById('media-upload').click();">Pilih Media</button>
        <span id="selected-media-count">(0 Media DiPilih)</span>
      </div>
      <input type="text" name="caption" placeholder="Caption  (Opsional)">
      <button type="submit">UNGGAH MEDIA</button>
      <div class="loading-spinner" id="loading-spinner"></div>
      <div class="uploading-text" id="uploading-text">Sedang Mengunggah...</div>
    </form>
    <div class="gallery">
      <?php include 'get_media.php'; ?>
    </div>
  </div>
  <script>
    document.getElementById('media-upload').addEventListener('change', function() {
      const count = this.files.length;
      document.getElementById('selected-media-count').textContent = `(${count} Media DiPilih)`;
    });

    document.querySelectorAll('.media-box').forEach(box => {
      box.addEventListener('click', () => {
        document.querySelectorAll('.download-btn').forEach(btn => btn.style.display = 'none');
        document.querySelectorAll('.media-box p').forEach(caption => caption.style.display = 'none');
        
        let downloadBtn = box.querySelector('.download-btn');
        let caption = box.querySelector('p');
        
        if (!downloadBtn) {
          downloadBtn = document.createElement('a');
          downloadBtn.href = box.getAttribute('data-file');
          downloadBtn.download = '';
          downloadBtn.textContent = 'Unduh';
          downloadBtn.className = 'download-btn';
          box.appendChild(downloadBtn);
        }
        
        if (!caption) {
          caption = document.createElement('p');
          caption.textContent = box.getAttribute('data-caption');
          box.appendChild(caption);
        }
        
        downloadBtn.style.display = 'block';
        caption.style.display = 'block';
      });
    });

    document.getElementById('upload-form').addEventListener('submit', function(event) {
      event.preventDefault();
      const loadingSpinner = document.getElementById('loading-spinner');
      const uploadingText = document.getElementById('uploading-text');
      loadingSpinner.style.display = 'block';
      uploadingText.style.display = 'block';
      const formData = new FormData(this);
      fetch(this.action, {
        method: this.method,
        body: formData,
      })
      .then(response => response.text())
      .then(result => {
        loadingSpinner.style.display = 'none';
        uploadingText.style.display = 'none';
        window.location.reload();
      })
      .catch(error => {
        loadingSpinner.style.display = 'none';
        uploadingText.style.display = 'none';
        console.error('Error:', error);
      });
    });
  </script>
</body>
</html>




