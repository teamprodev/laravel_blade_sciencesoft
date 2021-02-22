@extends('front.layout')

@section('css')

@endsection

@section('main')

<main class="mx-6 md:mx-16 lg:mx-24 my-10">

      <div>
        <p class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold pt-5 ">{{ _trans("Insurance Software: IT Solutions for Streamlined Insurance Services")  }}</p>
        <hr class="w-12 border-b-2 border-yellow-600 my-4" />
      </div>

      <div>
        <img src="{{ asset ('/images/industries/insurance/cover-pic-it-for-insurance.svg')}}" alt="">
      </div>

      <div class="text-xl py-4">
        <p class="mb-4">{{ _trans("IT solutions for insurance allow insurers to speed up service delivery, reduce labor costs, achieve insurance data accuracy and compliance with government regulations, as well as provide a personalized approach to clients and improve customer service.")  }}</p>

        <p> {{ _trans("Having 8-year experience with theinsurance industry, ScienceSoftprovides insurance companies with ITsolutions and related services fromsolution consulting to support to helpthem")  }} <span class="font-bold">{{ _trans("facilitate digital lead generationand increase the efficiency ofapplication processing and claimmanagement.")  }}</span></p>
      </div>

      <div class="mb-10">
        <div
            class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8"
          >
            <div class="flex flex-col">
              <h1 class="text-xl font-bold">{{ _trans("Eager to Improve Your Insurance Services?")  }}</h1>
              <hr class="w-12 border-b-2 border-yellow-600 my-4" />
              <div class="flex flex-wrap">
                <p class="text-gray-500 pr-5 text-xl w-full lg:w-4/5">
                  {{ _trans("TeamPRO’s team will analyze the business needs of your insurance company, suggest and implement robust solutions that will help you improve overall business productivity and enhance customer service.")  }}
                </p>
                <button
                class="uppercase text-white text-sm bg-blue-700 py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center w-full focus:outline-none hover:bg-blue-800 md:p-4 sm:p-4"
                >
                {{ _trans("GET A CONSULTATION")  }}
                </button>
              </div>
              </div>
            </div>
        </div>
      </div>

      <div class="mx-6 md:mx-16 lg:mx-24 my-10">
        <p class="text-xl  md:text-3xl lg:text-3xl font-bold pt-5 ">{{ _trans("WHAT MAKES TEAMPRO A RELIABLE PARTNER")  }}</p>
        <hr class="w-12 border-b-2 border-yellow-600 my-4" />
        <!-- STARS -->
        <div class="grid md:grid-cols-3 gap-4 border mb-4">
          <div>
            <div class="flex justify-center pb-10">
              <img src="{{ asset ('/images/industries/insurance/star.svg')}}" alt="" class="w-10">
            </div>
            <p class="text-center text-xl"><b>31</b> {{ _trans("years in software")  }} <br> {{ _trans("development and consulting")  }}</p>
          </div>
          <div>
            <div class="flex justify-center pb-10">
              <img src="{{ asset ('/images/industries/insurance/star.svg')}}" alt="" class="w-10">
            </div>
            <p class="text-center text-xl"><b>8</b> {{ _trans("years in IT for insurance")  }}</p>
          </div>
          <div>
            <div class="flex justify-center pb-10">
              <img src="{{ asset ('/images/industries/insurance/star.svg')}}" alt="" class="w-10">
            </div>
            <p class="text-center text-xl">{{ _trans("Experience in delivering both")  }} <br><b>B2B</b> {{ _trans("and")  }} <b>B2C</b> {{ _trans("insurance")  }} <br> {{ _trans("solutions.")  }}</p>
          </div>
        </div>
        <!-- END-STARS -->
        <div class="grid md:grid-cols-2 gap-4 border">
          <div class="text-center pb-4">
            <div class="flex justify-center pb-5">
              <img class="w-28" src="{{ asset ('/images/industries/insurance/aws-apn-select-consulting-partner.svg')}}" alt="">
            </div>
            <p><b>{{ _trans("AWS Select Tier")  }}</b> {{ _trans("partnership")  }}</p>
          </div>
          <div class="text-center">
            <div class="flex justify-center pb-5">
              <img class="w-72 border" src="{{ asset ('/images/industries/insurance/microsoft-gold-partner-8-competences.svg')}}" alt="" >
            </div>
            <p><b>8</b> {{ _trans("Microsoft Gold Competencies")  }}</p>
          </div>
        </div>
      </div>

      <!-- PIC-CARD -->
      <div class="mx-6 md:mx-16 lg:mx-24 my-10">
        <p class="text-xl md:text-3xl lg:text-3xl font-bold pt-5 ">{{ _trans("IT SOLUTIONS FOR INSURANCE WE DEVELOP")  }}</p>
        <hr class="w-12 border-b-2 border-yellow-600 my-4" />
        <div class="grid md:grid-cols-2">
          <div class="shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ _trans("Underwriting")  }}
              </p>
              <ul class="list-disc mb-3 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Processing customers’ applications.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Conversion of prospects into customers.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Risk management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Premium calculation.")  }}
                </li>
                <li class="mb-1 text-gray-800 mb-5">
                  {{ _trans("Compliance management.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ _trans("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1">{{ _trans("Cloud-native solutions based on Azure and AWS services")  }}</p>
            </div>
          </div>
          <div class="lg:mx-4 shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ _trans("Claim estimation")  }}
              </p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Claim submission and management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Damage estimation.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Compliance assurance.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ _trans("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1">{{ _trans("Cloud-native solutions based on Azure and AWS services PWA or native mobile applications")  }}</p>
            </div>
          </div>
        </div>
        <div class="grid md:grid-cols-2">
          <div class="shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ _trans("Injury management")  }}
              </p>
              <ul class="list-disc mb-3 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Case processing and claim management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Insurance coverage.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Treatment plans and reimbursement.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Compensations for injuries.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ _trans("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1">{{ _trans("Cloud-native solutions based on Azure and AWS services")  }}</p>
            </div>
          </div>
          <div class="lg:mx-4 shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ _trans("CRM")  }}
              </p>
              <p class="font-bold text-md">{{ _trans("Marketing")  }}</p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Building brand awareness.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Content marketing.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Customer journey management.")  }}
                </li>
              </ul>
              <p class="font-bold text-md">{{ _trans("B2C Sales")  }}</p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Online sales.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("In-person sales.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Integration with underwriting software.")  }}
                </li>
              </ul>
              <p class="font-bold text-md">{{ _trans("B2B Sales")  }}</p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Long-cycle sales.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Account development.")  }}
                </li>
              </ul>
              <p class="font-bold text-md">{{ _trans("Customer service")  }}</p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Omni-channel communication.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Case management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Registering claims.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ _trans("Technology/platform")  }}</p>
              <div class="flex justify-between">
                <p class="text-sm rounded bg-green-50 mb-1 w-50">{{ _trans("Dynamics 365 Marketing")  }}</p>
                <p class="text-sm rounded bg-green-50 mb-1 w-30">{{ _trans("Dynamics 365 Sales")  }}</p>
                <p class="text-sm rounded bg-green-50 mb-1 w-40">{{ _trans("Dynamics 365 Customer Service")  }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="grid md:grid-cols-2">
          <div class="shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ _trans("Customer portal")  }}
              </p>
              <ul class="list-disc mb-3 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Up to 100% of clients’ self-service.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Application management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Claim management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("AI assistant.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ _trans("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1">{{ _trans("Cloud-native solutions based on Azure and AWS services")  }}</p>
            </div>
          </div>
          <div class="lg:mx-4 shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ _trans("Data analytics")  }}
              </p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Risk management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Fraud detection.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Customer behavior analysis.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ _trans("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1">{{ _trans("Cloud-native solutions based on Azure and AWS services PWA or native mobile applications")  }}</p>
            </div>
          </div>
        </div>
        <div class="grid md:grid-cols-2">
          <div class="shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ _trans("Business intelligence")  }}
              </p>
              <ul class="list-disc mb-3 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Finance analytics.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Customer analytics.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Performance analytics.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Workforce analytics.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Operational analytics.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Planning and forecasting.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ _trans("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1 w-20">{{ _trans("Power BI")  }}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- END_PIC-CARD -->

      <!-- SIMP-CARD -->
      <div
            class="rounded-sm  border-2 border-white shadow-2xl transition-shadow mx-6 md:mx-16 lg:mx-24 my-10 mr-20 p-8 mt-20"
          >
            <div class="flex flex-col ">
              <h1 class="text-xl font-bold">{{ _trans("Eager to Improve Your Insurance Services?")  }}</h1>
              <hr class="w-12 border-b-2 border-yellow-600 my-4" />
              <div class="flex flex-wrap">
                <p class="text-gray-500 pr-5 text-xl w-full lg:w-4/5">
                  {{ _trans("TeamPRO’s team will analyze the business needs of your insurance company, suggest and implement robust solutions that will help you improve overall business productivity and enhance customer service.")  }}
                </p>
                <button
                class="uppercase text-white text-sm bg-blue-700 py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center w-full focus:outline-none hover:bg-blue-800 md:p-4 sm:p-4"
                >
                {{ _trans("GET A CONSULTATION")  }}
                </button>
              </div>
              </div>
            </div>
        </div>
      <!-- END-SIM-CARD -->

      <!-- CHOOSE-SERVICE -->
      <div class=" mx-6 md:mx-16 lg:mx-24 my-10">
        <p class="text-2xl md:text-3xl lg:text-3xl font-bold mb-4">{{ _trans("CHOOSE YOUR SERVICE OPTION")  }}</p>
        <hr class="w-12 border-b-2 border-yellow-600 mb-6" />
        <div class="grid md:grid-cols-2">
          <div class="shadow-xl border m-5">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-blue-700 text-center mt-5 text-xl font-semibold mb-4">
                {{ _trans("Solution consulting, implementation and support for insurance")  }}
              </p>
              <p class="font-bold  text-xl mb-3">{{ _trans("We consult on:")  }}</p>
              <ul class="list-disc text-lg mb-4 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Choosing suitable solutions and their optimal functionality to meet your business needs.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Reducing implementation costs.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Ensuring user adoption.")  }}
                </li>
              </ul>
              <p class="font-bold text-xl mb-4">{{ _trans("We offer:")  }}</p>
              <ul class="list-disc text-lg mb-3 ml-6">
                <li class="mb-1 text-gray-800 mb-3">
                  {{ _trans("End-to-end solution implementation.")  }}
                </li>
                <li class="mb-1 text-gray-800 mb-3">
                  {{ _trans("After-launch support.")  }}
                </li>
                <li class="mb-1 text-gray-800 mb-3">
                  {{ _trans("Continuous solution maintenance and evolution.")  }}
                </li>
              </ul>
              <button
                class="uppercase text-white text-sm bg-blue-700 py-2 px-4 w-2/5 mttext-center w-full focus:outline-none hover:bg-blue-800 md:p-4 sm:p-4"
                >
                {{ _trans("GET A CONSULTATION")  }}
                </button>
            </div>
          </div>
          <div class="shadow-xl border m-5">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-blue-700 text-center mt-5 text-xl font-semibold mb-4">
                {{ _trans("IT outsourcing for insurance")  }}
              </p>
              <p class="font-bold  text-xl mb-3">{{ _trans("Outsourcing of one or several IT functions:")  }}</p>
              <ul class="list-disc text-lg sm:mb-4 lg:mb-20 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ _trans("Business analysis to elicit your automation requirements.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("End-to-end insurance software development.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Testing and QA.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Data analytics for insights without developing own analytics solution.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("Managed infrastructure services.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ _trans("IT support and help desk.")  }}
                </li>
              </ul>
              <button
                class="uppercase text-white text-sm bg-blue-700 py-2 px-4 w-2/5 mt-30 text-center w-full focus:outline-none hover:bg-blue-800 md:p-4 sm:p-4"
                >
                {{ _trans("GET A CONSULTATION")  }}
                </button>
            </div>
          </div>
          </div>
        </div>
      </div>

  </main>

@endsection

@section('js')

@endsection
