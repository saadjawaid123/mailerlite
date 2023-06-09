@extends('layouts.app')

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Dashboard - All subscribers</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>

    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Subscribers</h6>
                                    <h2 class="mb-0 number-font">44,278</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="saleschart"
                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                            <span class="text-muted fs-12"><span class="text-secondary"><i
                                        class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                                    Last week</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All subscribers</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Country</th>
                                <th class="border-bottom-0">Subscribe Date</th>
                                <th class="border-bottom-0">Subscribe Time</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td><a href="javascript:void(0)" data-bs-effect="effect-scale"
                                       data-bs-toggle="modal" data-bs-target="#editsubscriber">System
                                        Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td><a href="javascript:void(0)" data-bs-effect="effect-scale"
                                       data-bs-toggle="modal" data-bs-target="#editsubscriber">System
                                        Architect</a></td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>65</td>
                                <td>2008/09/26</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011/02/03</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009/08/19</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2013/08/11</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/07/07</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012/04/09</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2010/01/04</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012/06/01</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td><a class="btn btn-icon btn-danger" data-bs-target="#confirmdelete"
                                       data-bs-toggle="modal" href="javascript:void(0)"><i
                                            class="fe fe-trash"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
    <div class="modal fade" id="confirmdelete">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4 pb-5">
                    <button aria-label="Close" class="btn-close position-absolute"
                            data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60"
                                        viewBox="0 0 24 24"><path fill="#f07f8f"
                                                                  d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle
                                cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45"
                                                                            d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                    <h4 class="text-danger">Warning!</h4>
                    <p class="mg-b-20 mg-x-20">Are you sure, you want to delete subscriber?</p>
                    <button aria-label="Close" class="btn btn-light pd-x-25" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button aria-label="delete" class="btn btn-danger pd-x-25 confirmDeleteBtn"
                            href="javascript:void(0)">Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteconfirmation">
        <div class="modal-dialog modal-dialog-centered text-center " role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4 pb-5">
                    <button aria-label="Close" class="btn-close position-absolute"
                            data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <i class="icon icon-check fs-70 text-success lh-1 my-5 d-inline-block"></i>
                    <h4 class="text-success tx-semibold">Deleted!</h4>
                    <p class="mg-b-20 mg-x-20">Subscriber deleted successfully</p>
                    <button aria-label="Close" class="btn btn-success pd-x-25" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formsuccess">
        <div class="modal-dialog modal-dialog-centered text-center " role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4 pb-5">
                    <button aria-label="Close" class="btn-close position-absolute"
                            data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <i class="icon icon-check fs-70 text-success lh-1 my-5 d-inline-block"></i>
                    <h4 class="text-success tx-semibold">Updated!</h4>
                    <p class="mg-b-20 mg-x-20"></p>
                    <button aria-label="Close" class="btn btn-success pd-x-25" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formerror">
        <div class="modal-dialog modal-dialog-centered text-center " role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4 pb-5">
                    <button aria-label="Close" class="btn-close position-absolute"
                            data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <i class="icon icon-close fs-70 text-danger lh-1 my-4 d-inline-block"></i>
                    <h4 class="text-danger tx-semibold">Error!</h4>
                    <p class="mg-b-20 mg-x-20"></p>
                    <button aria-label="Close" class="btn btn-danger pd-x-25" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editsubscriber">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Subscriber</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal needs-validation" id="editsubscriberform" novalidate>
                        <div class=" row mb-4">
                            <label for="validationCustom01" class="col-md-3 form-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="validationCustom01"
                                       value="" required>
                                <div class="invalid-feedback">Please provide a valid name.</div>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="inputEmail3" class="col-md-3 form-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="inputEmail3"
                                       placeholder="Email" value="saad-jawaid@live.com" disabled>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="validationCustom04" class="col-md-3 form-label">Country</label>
                            <div class="col-md-9">
                                <select class="form-control" id="validationCustom04"
                                        required>
                                    <option selected disabled value="">Select</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius
                                        and Saba
                                    </option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean
                                        Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic
                                    </option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, Democratic Republic of the Congo">Congo,
                                        Democratic Republic of the Congo
                                    </option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curacao">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands
                                        (Malvinas)
                                    </option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern
                                        Territories
                                    </option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and
                                        Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                        State)
                                    </option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                    </option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                        People's Republic of
                                    </option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kosovo">Kosovo</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic
                                        Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, the Former Yugoslav Republic of">Macedonia,
                                        the Former Yugoslav Republic of
                                    </option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated
                                        States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands
                                    </option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                        Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Barthelemy">Saint Barthelemy</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Martin">Saint Martin</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                    </option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                        Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Sint Maarten">Sint Maarten</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands">South
                                        Georgia and the South Sandwich Islands
                                    </option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China
                                    </option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic
                                        of
                                    </option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                    </option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor
                                        Outlying Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid Country.</div>
                            </div>
                        </div>
                        <div class="mb-0 mt-4 row ">
                            <div class="col-md-12 justify-content-end d-flex">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <button aria-label="Close" class="btn btn-light" data-bs-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
