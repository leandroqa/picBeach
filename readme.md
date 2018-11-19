# picBeach

API to get featured images from beaches destinations and review them.

## Available locations  

In this demo version are available some brazilians beaches classified by regions and beach slug name. It is still possible to read an post reviews about the pics.

### Regions

- AL (State of Alagoas)
- BA (State of Bahia)
- CE (State of Ceará)
- PE (State of Pernambuco)
- RJ (State of Rio de Janeiro)
- RN (State of Rio Grande do Norte)
- SP (State of São Paulo)

### Beach slug name

Coming soon.

## GET
    
    /api/regions    - Get all regions
    /api/beaches    - Get all beaches
    /api/beaches/SP  - Get beaches by region
    /api/beaches/RN/natal - Get picture(s) and reviews by beach slug name    
    /api/beaches/RN/natal/review/1 Get review by id

## POST

    /api/beaches/RN/natal/review  - Publish a new review

## PUT

    /api/beaches/RN/natal/reviews/1  - Update a review

## DELETE

    not available.


## License

This API is only for studies purposes. Feel free to use it to practice your API knowledge using the praia boa database.
