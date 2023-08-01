@include('partials/navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
    <link rel="stylesheet" href="/css/allcamp.css">
    <title>Campgrounds</title>
</head>
<body>
    <div id="map" class="mb-4" style="width: 100%; height: 500px;"></div>

    <h1 class="display-6 text-center mb-4">Search and View Our Campgrounds</h1>

    <form action="/results/?" class="d-flex mb-5">
        <input class="form-control me-2" type="search" placeholder="Search Your Campgrounds ...." name="search_query" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
    </form>

    <div class="card mb-3">
        <div class="row">
            <div class="col-md-4">
                <!-- Sample image placeholder -->
                <img class="img-fluid" src="path/to/sample/image.jpg" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        Campground Title
                    </h5>
                    <p class="card-text">
                        Campground description goes here.
                    </p>
                    <p class="card-text"><small class="text-muted">
                            Campground location goes here.
                        </small></p>
                    <a href="/campgrounds/campground-id" class="btn btn-dark">View Campground Title</a>
                </div>
            </div>
        </div>
    </div>

    <!-- More campgrounds cards can be added here, following the same structure -->

    <script>
        // Replace the following placeholder data with actual data from your server
        const campgrounds = [
            {
                title: 'Sample Campground 1',
                description: 'This is a sample description for Campground 1.',
                location: 'Sample Location 1',
                image: 'path/to/sample/image1.jpg',
                _id: 'campground-id-1'
            },
            {
                title: 'Sample Campground 2',
                description: 'This is a sample description for Campground 2.',
                location: 'Sample Location 2',
                image: 'path/to/sample/image2.jpg',
                _id: 'campground-id-2'
            },
            // Add more campground data objects as needed
        ];

        // Replace '<YOUR_MAPBOX_ACCESS_TOKEN>' with your actual Mapbox access token
        mapboxgl.accessToken = '<YOUR_MAPBOX_ACCESS_TOKEN>';
        
        // Your JavaScript logic for initializing and displaying the map goes here
        // You can use the 'campgrounds' array to place markers or clusters on the map
    </script>
    <script src="/js/clusterMap.js"></script>
</body>
</html>

@include('partials/footer')
