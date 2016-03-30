<?php
  // Author: Lisa Wald
  // Contact: Paul Earle,
  // Last modified: 03/03/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'ComCat Documentation - Data Availability';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<h2>Data Availability as of 2015-03-19:</h2>

<ul>
  <li>
    Realtime Earthquake Data Sources &amp; Contributing Networks from 2013-02-02
    to present
  </li>
  <li>
    NEIC <a href="/data/pde.php">PDE Preliminary Determination of Epicenters
    Bulletin</a>
    <ul>
      <li>
        Monthly from 1973-01-01 to 2011-03-31
      </li>
      <li>
        Weekly from 2011-04-01 to 2012-10-13
      </li>
      <li>
        Daily from 2012-10-14 to 2013-02-08
      </li>
    </ul>
  </li>
  <li>
    <a href="/earthquakes/shakemap/atlas.php">Shakemap Atlas</a> from 1923 to
    2011
  </li>
  <li>
    Wphase (Duputel) from 1990 to 2012
  </li>
  <li>
    ISCGEM
  </li>
  <li>
    GCMT (Global Centroid-Moment-Tensor)
  </li>
</ul>

<p>
  Currently loading (available soon):
</p>

<ul>
  <li>
    &ldquo;Official&rdquo; magnitudes
  </li>
</ul>

<h2>"Missing" Earthquakes</h2>

<ul>
	<li>Why are there &ldquo;missing&rdquo; earthquakes?</li>
	<li>There is an earthquake on another website; why is it not here?</li>
</ul>


<p>
The maps and lists show events which have been located by the USGS and
contributing agencies within the last 30 days. They should not be considered
to be complete lists of all events in the US and adjacent areas and
especially should not be considered to be complete lists of all events M4.5+
in the world.
</p>

<p>In most cases, we locate and report on earthquakes worldwide of magnitude 5.0 and larger in 30 minutes or less. Additionally, we locate and report on earthquakes magnitude 4.0 and larger within the contiguous US and populated regions of Alaska within 30 minutes. Earthquakes of magnitude 2.0 or greater within the US and populated regions of Alaska are often rapidly reported if they occur within the <a href="/monitoring/anss/">region of a contributing local seismic network</a>.</p>

<p>We may not rapidly locate earthquakes smaller than 5.0 outside the US unless they have caused significant damage or are widely felt. Earthquakes this small rarely cause significant damage. At times, some other agency may report an earthquake with a larger magnitude than what we compute from our data, especially for non-US events near magnitude 5.0. If our magnitude for the event is less than magnitude 5.0, we may not issue a rapid report for it.</p>

<p>Earthquakes occurring outside the US and smaller than about magnitude 4.5 can be difficult for the USGS to locate if there are not enough data. The USGS continues to receive data from observatories throughout the world for several months after the events occur. Using those data, we add new events and revise existing events in later publications. For a description of these later publications and the data available, see <a href="/data/">Data</a>.</p>

<p>There are many regional networks around the world that can record smaller earthquakes in their region than the NEIC global network can, and in many cases these regional networks do not share their data with the NEIC.  So if you think there is a missing earthquake on our maps and lists, please see the national and regional links for the area of interest on these webpages:</p>

<ul>
	<li><a href="/earthquakes/states/">Earthquake Info by State/Territory</a></li>
	<li><a href="/monitoring/institutions.php">Geophysics Institutions Throughout the World</a></li>
</ul>

<p>Also see: <a href="http://www.usgs.gov/faq/?q=taxonomy/term/9826">FAQs about Latest Earthquake Information</a></p>
