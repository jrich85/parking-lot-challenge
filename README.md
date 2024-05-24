# Parking Lot Challenge

## Installation

1. Install docker compose https://docs.docker.com/compose/install/#scenario-one-install-docker-desktop
2. Clone the repository
2. Run `docker-compose up`
4. Run `docker-compose exec my-app composer install -o`
3. Run `docker-compose exec my-app php artisan migrate`
4. Load in browser http://localhost:8081

## Summary

Confronted with the ongoing challenge of locating parking spaces within our parking structures in congested city
streets, we embarked on a mission to rethink the parking experience using object-oriented design principles. Create the
necessary APIs to satisfy the requirements below.

## Implementation

### Functional Requirements

1. *Real-time Capacity Monitoring*: Users should have access to accurate information about the number of available
   parking spots and the total capacity of the parking lot.
2. *Spot Type Status*: The system should track when certain types of spots, such as motorcycle spots or van spots are
   taken up.

### Non-Functional Requirements

* *Multi-vehicle Accommodation*: The parking lot accommodates motorcycles, cars, and vans.
    * Motorcycles can park in any available spot.
    * Cars can take any regular spot within the parking lot.
    * Vans are also permitted to park, but they need a space equivalent to three regular spots.
* *Vehicle Information Availability*: Vehicle information, such as the type of vehicle, will be provided to the system
  via an AI-integrated camera system, which sends API requests with the necessary information.

### API Endpoints

Below are the proposed endpoints we’ll need (feel free to modify as needed). You can assume that all requests originate
from a trusted source.

1. `[POST] /api/parking-spot/{id}/park`
2. `[POST] /api/parking-spot/{id}/unpark`
3. `[POST] /api/parking-lot`

# Notes for the Reader

This was a fun task to undertake, but the challenge was to see how much I could get done in one hour, so take this in
mind when reviewing the solution.

## Running the seeder

Run `docker-compose exec my-app php artisan migrate --seed`,

Or if you want to start fresh:

Run `docker-compose exec my-app php artisan migrate:fresh --seed`

This will create a bunch of parking spots in one parking lot, so you can see the actions take effect.

## Future steps

Future steps would be to add filtering to the summary endpoint, allowing for focusing on different
parking lots, floors, sectors, or places to fit a van, to name a few.
