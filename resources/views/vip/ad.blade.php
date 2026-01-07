<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Join our Private Member Community." />
  <meta property="og:title" content="Join our Private Member Community" />
  <meta property="og:description" content="Join our Private Member Community" />
  <meta property="og:type" content="website" />
  <title>Join our Private Member Community</title>
  @vite(['resources/css/app.css'])
  <style>
    /* Small inline rules to keep the landing focused and self-contained */
    body { background-color: #f9fafb; font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; }
  </style>

  <!-- Meta Pixel Code -->
         <script>
         !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '1411128380520414'); fbq('track', 'PageView');

          @if(Route::currentRouteName() == 'nowpayment.success')
              // Fire Purchase only on the checkout success page
              fbq('track', 'Purchase', {value: 0.00, currency: 'USD'});
          @endif

        </script>

</head>
<body class="antialiased">
  <main class="min-h-screen flex items-center justify-center px-6 py-16">
    <section class="max-w-3xl bg-white p-10 rounded-lg shadow">
      <h1 class="text-3xl font-extrabold text-gray-900">Join Our Private Member Community</h1>
      <p class="mt-3 text-gray-600">Focused on structured insights, learning, and disciplined decision-making in 2026</p>

      <div class="mt-6 space-y-4">
        <h2 class="text-lg font-semibold text-gray-800">What you get</h2>
        <ul class="list-disc list-inside text-gray-600">
          <li>Private membership community</li>
          <li>Ongoing market commentary and discussion</li>
          <li>Educational strategies & guidance</li>
        </ul>

        <h2 class="text-lg font-semibold text-gray-800">Important information</h2>
        <ul class="list-disc list-inside text-gray-600">
          <li>Introductory pricing available for yearly membership.</li>
          <li>Coupon code: Newyear2026</li>
        </ul>

        <p class="text-sm text-gray-500">By clicking through, you acknowledge our <a href="{{ route('policy') }}" target="_blank" class="underline">Privacy Policy</a> and <a href="{{ route('terms') }}" target="_blank" class="underline">Terms of Service</a>.</p>
      </div>

      <div class="mt-8">
        <a href="{{ url('/#pricing') }}" class="inline-block w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-md text-sm font-medium">Join Our Private Member Community Today</a>
      </div>

      <!-- <div class="mt-6 text-xs text-gray-400">Contact: <a href="mailto:support@c4csignals.com" class="underline">support@c4csignals.com</a></div>
       -->
    </section>
  </main>
</body>
</html>