# HLS Proxy & Stream Player

`m3u8 proxy is a lightweight PHP script that acts as a proxy and web-based player for HLS (HTTP Live Streaming) `.m3u8` streams. It provides a Bootstrap-styled HTML interface to load, play, and proxy HLS streams in your browser, making it easier to work with restrictive or protected `.m3u8` URLs.

## 🌐 Features

- ✅ Web-based HLS video player using [hls.js](https://github.com/video-dev/hls.js)
- ✅ Optional stream proxying to bypass CORS and hide referrer
- ✅ Built-in test streams and preset support
- ✅ Live logging of stream events and errors
- ✅ Auto-redirect and re-proxy of child `.ts` and `.m3u8` playlist files
- ✅ Native support fallback for Safari/iOS
- ✅ Neatly designed interface using Bootstrap 5

---

## 📁 File

**`hls-proxy.php`** — contains the entire proxy logic and web UI in a single standalone PHP file.

---

## 🚀 How to Use

### 1. Upload the file

Place `hls-proxy.php` on any web server with PHP support (e.g., Apache, Nginx + PHP, XAMPP, etc.).

### 2. Access via browser

Open it in your browser:

```
http://yourdomain.com/hls-proxy.php
```

### 3. Load a stream

- Enter any valid `.m3u8` URL into the input field.
- Optionally toggle the "Use Proxy" switch.
- Click **Load Stream**.
- Enjoy!

You can also load streams directly via URL parameters:

```
http://yourdomain.com/hls-proxy.php?url=https://example.com/stream.m3u8
```

---

## ⚙️ Proxy Behavior

When proxying a `.m3u8` file:

- The script fetches the file.
- Rewrites segment URLs to pass through the same proxy.
- Applies headers like custom `Referer` or `User-Agent` (modifiable in code).

---


## 🧠 Requirements

- PHP 7.0 or higher
- `cURL` enabled in PHP

---


## 🛠️ Customization

- 🎨 Edit preset buttons in the HTML (`displayPlayerInterface()` function)
- 🔧 Adjust headers in `processStreamRequest()` for specific services
- 🧩 Easily integrate into your own UI by embedding or copying logic

---

## 🤝 Credits

**Made with ❤️ by [METAHAT](https://github.com/metahat)**  
Powered by [hls.js](https://github.com/video-dev/hls.js) and [Bootstrap 5](https://getbootstrap.com/)

---

## 📄 License

MIT License — feel free to use, modify, and share!

---
