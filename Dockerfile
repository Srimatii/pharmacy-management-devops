# Use Node.js base image
FROM node:18

# Set app folder
WORKDIR /app

# Copy files and install dependencies
COPY package*.json ./
RUN npm install

# Copy rest of your app
COPY . .

# Tell the app to run
EXPOSE 3000
CMD ["npm", "start"]
