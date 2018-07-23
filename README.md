# demo_repository_pattern
Demonstration for Repository Pattern

A Use Case For Repository Pattern
=================================
One of my previous Laravel project was dealing with a good amount of caching data. Initially we went ahead with general caching of Laravel which comes by default.
After a period there was a need to change it to database caching.
This was actually a very tedious task as in lot of places the cache api function was called which was tightly binded to the general cache api.
Instead of doing this way, I proposed the plan for changing the design to add an extra abstraction layer for fetching the cached data in form of repository pattern.
By implementing this the bulk task for going into each file and changing all the cache api calls is replaced by only one line of code in the service provider.
We implemented it and the database caching was on it's way running well and fine.
It's impact was quite evident when later again there were need for some more changes in the drivers for caching.



Here I am trying to demonstrate this with a very simple implementation, how to switch between general cache and database caching.

The repository pattern code is in app/Repositories/ToggleCaching directory.

The switch is in app/Providers/SwitchCachingServiceProvider.php and the provider is added in the config/app.php in the providers array.

A route Route::get('/whichCaching', 'InfoController@whichCaching'); is added for checking the output.

So currently for swithcing there are 2 lines in the service provider one is for general caching and another for database caching, one is commented out as for this one we need only one cache to be running at any given point of time, so accordingly the output will be displayed on navigating to /whichCaching after installing and configuring this one.

It has a migration file for the cache table, please run the migration it is needed for the database caching.

Please let me know if there are any queries or suggestions for this one.
