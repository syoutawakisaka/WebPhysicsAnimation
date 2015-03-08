<?php
$title = "Physics";
include("inc/header.php");
?>
<div class="slider-wrapper">
    <div class="single-item">
        <div><img src="images/car.png" alt="car">
        </div>
        <div><img src="images/car.png" alt="car">
        </div>
        <div><img src="images/car.png" alt="car">
        </div>
    </div>
</div>
<div id="wrapper">
  <div id="extra" class="container">
    <h2>Physic Explanation</h2>
    <span>Whats the physics behind the animation?</span>
    <p>We’re going to take a look at some of the physics behind a car driving off a cliff into an indiscriminate body of water, like a lake or pond, but most likely a river because erosion. As our car is driving along the cliff, ready to fly off, let’s say it’s moving a cool 45 meters per second (m/s), which roughly translates to 100 miles per hour. The car is able to move when the driver pushes on the gas pedal because of friction. The engine spins the axle of the front tires, and the tires spin clockwise. Friction is acting in the opposite direction to that which the driver is trying to go. This gives the tire enough grip to move forward and propel the car forward.</p>
    <p>The car approaches the edge of the cliff. Let’s say this cliff is 50m high, a nice, round number. The car shoots off, falling to the water in an arc. If we want to find out how long it takes the car to hit the water, we need to use an equation. We also would want to find out how far from the cliff the car lands in the water. Since the car is moving both horizontally and vertically, we will need equations for both horizontal movement and vertical movement.</p>
<p>Before we solve any equations, however, we need to write down the information we know. Everything we need to know has already been stated in the above paragraphs or is common knowledge. </p>
      <p>So for our horizontal information, we have:</p>
      <br>
      <p>x= ?</p>
      <br>
      <p>x is the horizontal displacement of our car, or how far the car will move horizontally. This is what we are trying to find out.</p>
      <br>
      <p>vi= 45m/s</p>
      <br>
      <p>This is the initial velocity of the car, or how fast it is going when it begins its descent. This is already set to 45m/s for us.</p>
      <br>
      <p>(ax)= 0m/s/s</p>
      <br>
      <p>ax is the horizontal acceleration. Since our car can not accelerate mid-air, and will stay a constant horizontal speed, this is 0.</p>
      <br>
      <p>Next, for our vertical information, we have:</p>
      <br>
      <p>y= -50m</p>
      <br>
      <p>This is the horizontal displacement. We already know this because the cliff is 50m high. Since the car is going down 50m, it is negative.</p>
      <br>
      <p>(viy)= 0m/</p>
      <br>
      <p>This is the initial vertical velocity. The car is not moving up or down while driving, so this is 0.</p>
      <br>
      <p>(ay)= -9.81m/s/s</p>
      <br>
      <p>This is the acceleration vertically. This one will change, because the car will fall down the cliff. -9.81m/s/s is the universal force of gravity, and is given to us because of that.</p>
      <br>
      <p>Since we know three vertical variables, we are able to use a vertical equation to find the fourth. We can use this information to find the missing horizontal equations. In this case, the vertical problem will help us find time, which we can then use to find horizontal displacement.
</p>
      <br>
      <p>Our vertical equation for time is:
</p>
      <br>
      <p>y = (viy)•t +0.5•(ay)•t2</p>
      <br>
      <p>We will now plug in our variables:</p>
      <br>
      <p>-50m = (0m/s)•t +0.5•(-9.81m/s/s)•t2</p>
      <br>
      <p>Since the term “(0m/s)•t” reduces to 0, the equation can be simplified to:</p>
      <br>
      <p>-50m = (-4.9m/s/s)•t2</p>
      <br>
      <p>If both sides of the equation are divided by -5.0 m/s/s (rounded up from -4.9), the equation becomes:</p>
      <br>
      <p>10s2 = t2</p>
      <br>
      <p>If we then find the square root of both sides, we can find that the time is:</p>
      <br>
      <p>t = 3.162 s</p>
      <br>
      <p>Now that we know the time, we can figure out the horizontal displacement, or how far the car lands from the base of the cliff. We can solve for x with the following equation:</p>
      <br>
      <p>x = vi•t + 0.5•(ax)•t2</p>
      <br>
      <p>This equation is similar to the one we used for time. The first thing to do, of course, is plug in our variables.</p>
      <br>
      <p>x = 45m/s•3.162s + 0.5•(0m/s/s)•3.162s2</p>
      <br>
      <p>The part of the equation right of the +, (0.5•(0m/s/s)•3.162s2) reduces to 0, because our x acceleration is 0. Thus, the entire equation can be reduced to:</p>
      <br>
      <p>x = 45m/s•3.162s</p>
      <br>
      <p>If we solve, we can see that x is:</p>
      <br>
      <p>x = 142.29m</p>
      <br>
      <p>So now we know that the car is in the air for 3.162 seconds and lands 142.29 meters away from the base of the cliff.</p>





    <a href="#" class="button">Back to Top</a> </div>
</div>
<?php include("inc/footer.php"); ?>
