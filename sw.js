;
const CACHE_NAME = 'v1_cache',
    urlsToCache = [
        './',
        './script.js',
        './img/logo.png',
        'css/bootstrap.min.css',
        'js/jquery-4.4.1.min.js',
        'img/32',
        'img/64',
        'img/96',
        'img/128',
        'img/192',
        'img/256',
        'img/384',
        'img/512',
        'img/1024',
    ]
self.addEventListener('install', e => {
    e.waitUntil(
        caches.open(CACHE_NAME)
        .then(cache => {
            return cache.addAll(urlsToCache)
                .then(() => self.skipWaiting())
        })
        .catch(err => console.log('Falló registro de cache', err))
    )
})

self.addEventListener('activate', e => {
    const cacheWhitelist = [CACHE_NAME]

    e.waitUntil(
        caches.keys()
        .then(cacheNames => {
            return Promise.all(
                cacheNames.map(cacheName => {



                    if (cacheWhitelist.indexOf(cacheName) === -1) {
                        return caches.delete(cacheName)
                    }
                })
            )
        })
        .then(() => self.clients.claim())
    )
})

self.addEventListener('fetch', e => {
    e.respondWith(
        caches.match(e.request)
        .then(res => {
            if (res) {

                return res
            }
            return fetch(e.request)
        })
    )
})