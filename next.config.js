/** @type {import('next').NextConfig} */
const nextConfig = {
  env: {
    name: process.env.NEXT_PUBLIC_NAME,
    url: process.env.NEXT_PUBLIC_URL,
  },
}

module.exports = nextConfig
