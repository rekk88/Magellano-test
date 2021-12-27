# class Location:
#   def __init__(self, id, zipCode, lat, lng):
#       self.id = id
#       self.zipCode = zipCode
#       self.lat = lat
#       self.lng = lng
from haversine import inverse_haversine, Unit

locations = [
{'id': 1000, 'zip_code': '37069', 'lat': 45.35, 'lng': 10.84},
{'id': 1001, 'zip_code': '37121', 'lat': 45.44, 'lng': 10.99},
{'id': 1001, 'zip_code': '37129', 'lat': 45.44, 'lng': 11.00},
{'id': 1001, 'zip_code': '37133', 'lat': 45.43, 'lng': 11.02}]
values = []

coord1 = (45.35, 10.84)
coord2 = (45.44, 10.99)

distance = geopy.distance.vincenty(coord1, coord2).km
# print distance.vincenty(coord1, coord2).km
# print hs