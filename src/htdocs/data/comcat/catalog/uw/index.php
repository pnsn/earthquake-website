<?php
include '../_catalog.inc.php';
?>
<h2>The PNSN (UW) Earthquake Catalog</h2>

<h3 id="overview">Extent</h3>

<dl>
  <dt>1969 to present</dt>
  <dd>
    <dl>
      <dt>Latitude</dt>
      <dd>[42.0&deg;, 50.0&deg;]</dd>

      <dt>Longitude</dt>
      <dd>[-127.0&deg;, -116.0&deg;]</dd>

      <dt>Magnitude</dt>
      <dd>[-2.5, 6.8]</dd>

      <dt>Horizontal Datum</dt>
      <dd>WGS84</dd>

      <dt>Vertical Datum</dt>
      <dd>WGS84 (approximately, see <a href="#depths">section Depths</a>)</dd>
    </dl>
  </dd>
</dl>


<h3 id="contributors">Contributors</h3>

<ul>
<li><a href="../../contributor/uw/">UW (Contributor)</a></li>
</ul>


<h3 id="additional">Additional Information</h3>

<ul>
<li><a href="http://www.pnsn.org/earthquakes/historic-catalog">
    PNSN Historical Catalog (pre-1969)</a>
</li>
<li><a href="http://www.pnsn.org/tremor">
    PNSN non-volcanic tremor catalog</a>
</li>
</ul>

<h2>About the PNSN Catalog</h2>

<ul>
<li>Manually picked P- and S-wave arrival times from seismic stations in Washington and Oregon, USA</li>
<li>Events are located using Hypoinverse (since 2012) or Spong, an program based on FastHypo (prior to 2012)</li>
<li>We use several different flat-layer velocity models in our Authoritative Region (WA/OR)</li>
<li>Reported depths are derived from the estimated model depths by applying a average-station-elevation based correction</li>
<li>We often report a Duration Magnitude (Md) for old and small earthquakes</li>
<li>We prefer our Local Magnitude (Ml)</li>
<li>The completeness level of the PNSN catalog varies by geographic region as well as time</li>
<li>The PNSN plans to improve the catalog consistency by relocating all earthquakes with Hypoinverse</li>
<li>The PNSN is improving the consistency of their different magnitude scales over time</li>
</ul>

<nav class="jumplist">
    <a href="#one">Locations and Origin Times</a>
    <a href="#two">Magnitudes</a>
    <a href="#three">Event Types</a>
</nav>

<p>
  The PNSN determines the start time of the earthquake (origin time), and 
  the geographic location of the earthquake (latitude, longitude, depth) using
  arrival times of P- and S-waves at seismic stations throughout Washington and
  Oregon. To find the best estimate of origin time and location of the earthquake, 
  we minimize the difference between observed arrival times and predicted arrival 
  times that were calculated using an assumed origin time and travel times through 
  some Earth model.  
  Inherent in this process is the introduction of random and systematic errors. 
  Assumed random errors are introduced when the arrival time is not correctly or
  consistently picked.  It is possible to reduce but not eliminate these picking 
  errors.  Systematic errors due to the use of imperfect Earth models are difficult 
  to quantify, because the formal uncertainties that come out of the travel time 
  inversion do not reflect these.
</p>

<h3 id="one">Locations and Origin Times</h3>

<h4>Arrival Time Data</h4>

<p>
  All arrival times are reviewed and re-picked by analysts. We pick both P-waves 
  and S-waves. It is our policy to remove all automatic picks, unless they are 
  deemed accurate. To ensure as much consistency in picking as possible, our main 
  analyst reviews all other people's picks and does the final update.
</p>

<p>
  P-waves are the first arriving waves and we pick the arrival exactly 
  at the time when the waveform abruptly turns up or down, i.e. at the onset of
  the P-wave. Sometimes this beginning is hidden in background noise, and it is 
  not quite clear where the exact onset is. S-waves arrive later in the wave 
  train and it is therefore more difficult to determine where the S-wave starts. 
  We ideally only pick S-waves on the horizontal components of three-component stations. 
  However, because including S-waves helps determining the depth of the earthquakes, 
  we do sometimes pick them on vertical channels if no horizontal channels are 
  available at close in distances. Figure 1 shows an example of a clear 
  P-wave onset and a clear S-wave onset. Figure 2 shows example of a less clear 
  P-wave onset and a less confident S-wave pick.
</p>

<div class="row">
 <div class="column one-of-two">
 <figure class="left">
  <img src="images/image02.png" width="600" alt="Clear P- and S-pick"/>
  <figcaption>Figure 1: Example of a clear P-wave onset and a clear S-wave onset.</figcaption>
  </figure>
 </div>
 <div class="column one-of-two">
 <figure class="left">
  <img src="images/image00.png" width="600" alt="Less clear P- and S-pick"/>
  <figcaption>Figure 2: Example of a less clear P-wave onset and a less confident S-wave pick.</figcaption>
  </figure>
 </div>
</div>

<p>
  To indicate the precision of a pick, i.e. an indication of how difficult it was
  to make the pick and the analyst's estimate of confidence, we give each pick a
  quality (weight). We also indicate whether the P-wave onset was abrupt 
  (impulsive, i) or more gradual (emergent, e).
</p> 
<!--  Removed this block because this info is not obtainable through ComCat
<p>
  Table 1 gives our pick weights
  and the uncertainty in s that is associated with it.
</p>

<p>
<table border="1" width="100%">
  <caption>Table 1. Explanation of Pick Quality</caption>
  <tbody>
    <tr>
      <th>Pick Quality</th>
      <td>0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4 and up</td>
    </tr>
    <tr>
      <th>Pick Uncertainty (s)</th>
      <td>0-0.03s</td>
      <td>0.03-0.06s</td>
      <td>0.06-0.15s</td>
      <td>0.15-0.30</td>
      <td>>0.30s pick not used</td>
    </tr>
    <tr>
      <th>Pick Weight</th>
      <td>1.00</td>
      <td>0.75</td>
      <td>0.50</td>
      <td>0.25</td>
      <td>0</td>
    </tr>
  </tbody>
</table>
</p>
-->

<p>
  The accuracy of the arrival time picks relies on the time stamping of the 
  waveform data to be correct. Nowadays, most of our stations get accurate time
  from Global Positioning Satelites via GPS antennas, however, it still sometimes 
  happens that the timing of a station is bad. When the clock is really bad, it 
  is easy to detect because the arrival times at that site will not match the 
  general pattern for an earthquake, however, if the clock is only a little bit off, 
  or if all stations in a geographic cluster have timing that is bad, it is 
  more difficult to detect.
</p>

<h4>Earth Model - Homogeneous Layer Cake</h4>

<p>
  The PNSN uses several simple 1D, homogeneous flat layer P-wave speed models to
  calculate travel times from earthquake source to station location. We assume
  that the S-wave speed in each layer is 0.56 times the P-wave speed (Vp/Vs=1.78).
  To account for smaller three-dimensional Earth structure that introduces 
  systematic travel time biases, we use so-called station corrections 
  (also sometimes referred to as station delays). Our station corrections
  do not account for any systematic azimuthal differences in travel time
  and therefore they mostly represent biases introduced from structure right
  below the station. For example, travel times through the Seattle
  basin are longer, so we subtract a little bit of time from arrival times at
  Seattle basin stations to bring those observations more in line with those
  at other sites. Each velocity model has its own set of station corrections
  as they are intimately linked and only relevant to each other.
  Which velocity model is used depends on the location of the earthquake.
</p>

<p>
  Because the travel time calculation does not account for the curvature of the Earth,
  the predicted travel times are only appropriate out to relatively
  short earthquake-station distances (epicentral distances). We typically only
  pick arrival times on station channels out to about 150 km from the earthquake, 
  except for offshore or other regional earthquakes.
</p>

<h4 id="depths">Depths</h4>
  The location algorithm that we use (Hypoinverse) and the one that we used in the past 
  (Spong, based on FastHypo), provides the estimated depth of the earthquake within the
  model. All the stations are assumed to be at the top of the flat layers. In practice this 
  means that the depths are not relative to an absolute datum, but they are relative to 
  the average elevation of the stations that were used to locate the event.
  Before reporting the earthquake depth, we apply a correction so that it is approximately 
  relative to sea level (WGS84). We have applied this correction to our whole catalog.

  In the future we may imbed the stations inside the model so that we can obtain absolute
  depths.


<h3 id="two">Magnitudes</h3>
The PNSN currently produces two types of earthquake magnitudes.
<div id="Md">
<h4>Duration magnitude (Md)</h4>
  The larger the earthquake the longer you can see significant energy
  on a seisic record. Currently, an algorithm measures the duration 
  of the signal as the time between the P-pick and the time where the 
  average absolute amplitude of a 2s window falls below a preset value. 
  That value varies for each channels as it depends on the instrument 
  response of the seismic instrument. In the past (before 2012), 
  we would estimate by eye at what time the signal had reached a level 
  of twice the background noise from before the signal. The duration
  magnitude relation that we use has varied over time because of this.
  We plan to making our Md magnitude scale more consistent over time.
</div>
<div id="Md">
<h4>Local magnitude (Ml)</h4>
  The larger the earthquake the higher the amplitude of the signal
  on a seisic record (unless the signal is bigger than the seismometer
  can record, i.e. unless the instrument clips). We modified Richter's 
  original scale by using a distance correction (Jennings and Kanamori, 1983) 
  that is better suited for our region. We also recently started 
  allowing amplitude measurements on a select set of vertical-component 
  only stations, so that we can determine Local Magnitudes for small 
  volcanic events and events in the past for which we have no horizontal 
  component data. 
</div>

<h3 id="three">Event Types</h3>

<p>
  The PNSN seismic network records many kinds of shaking events. The table below 
  lists the types of events that we submit to ComCat (as long as they are located
  within the geographic box described in <a href="#overview">the overview</a> 
  at the top of this page). We can't always find well-constrained locations for 
  every event. We do not submit events to ComCat for which we cannot compute 
  a magnitude or location. For some examples of non-earthquake events, see:
  <a href="http://www.pnsn.org/earthquakes/exotic-events"> http://www.pnsn.org/earthquakes/exotic-events</a>
</p>

<p>
<table width=50% border=1>
<caption>Table 2. Event Types that we submit to the ANSS Comprehensive Catalog (ComCat)</caption>
<thead>
 <tr>
   <th>ANSS Event Type</th>
   <th>QuakeMl Event Type</th>
   <th>Description</th>
   <th>Number of Events</th>
</tr>
</thead>
<tbody>
 <tr>
   <td>eq</td>
   <td>earthquake</td>
   <td>Earthquake with typical waveforms</td>
   <td>~99k</td>
 </tr>
 <tr>
   <td>lf</td>
   <td>earthquake</td>
   <td>Earthquake with low-frequency waveforms</td>
   <td>~2.2k</td>
 </tr>
 <tr>
   <td>px</td>
   <td>explosion</td>
   <td>Based on waveform characteristics probably a man-made explosion</td>
   <td>~13k</td>
 </tr>
 <tr>
   <td>ex</td>
   <td>explosion</td>
   <td>Confirmed man-made explosion</td>
   <td>~1.7k</td>
 </tr>
 <tr>
   <td>sn</td>
   <td>sonic boom</td>
   <td>A sonic boom for which we were able to estimate a location</td>
   <td>2</td>
 </tr>
 <tr>
   <td>ot</td>
   <td>other event</td>
   <td>Unknown event type</td>
   <td>~60</td>
 </tr>
</tbody>
</table>
</p>

<p>
<table width=50% border=1>
<caption>Table 3. Event Types that we do not submit to the ANSS Comprehensive Catalog (ComCat)</caption>
<thead>
 <tr>
   <th>ANSS Event Type</th>
   <th>QuakeMl Event Type</th>
   <th>Description</th>
   <th>Number of Events</th>
</tr>
</thead>
<tbody>
 <tr>
   <td>su</td>
   <td>ice quake, landslide, rockfall, debris avalanche, snow avalance, etc.</td>
   <td>Surface Event of undetermined nature, could be Ice Quake, Landslide, Rockfall</td>
   <td>many, most without good locations and without magnitudes</td>
 </tr>
 </tbody>
</table>
</p>


