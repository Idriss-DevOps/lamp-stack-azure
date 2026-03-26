# LAMP Stack on Render.com – Free Live Hosting
**Get a real public URL in under 5 minutes — no credit card needed**

---

## Your Live URL (after deploy)
```
https://lamp-stack-azure.onrender.com
```
*(exact name depends on what you enter in Step 4)*

---

## Step-by-Step Deploy Instructions

### Step 1 – Create a free GitHub account
Go to https://github.com and sign up (free).

---

### Step 2 – Upload this project to GitHub

Option A – GitHub website (easiest):
1. Go to https://github.com/new
2. Repository name: `lamp-stack-azure`
3. Click **Create repository**
4. Click **uploading an existing file**
5. Drag and drop ALL files from this folder
6. Click **Commit changes**

Option B – Git commands:
```bash
git init
git add .
git commit -m "LAMP Stack Azure project"
git remote add origin https://github.com/YOUR_USERNAME/lamp-stack-azure.git
git push -u origin main
```

---

### Step 3 – Create a free Render account
Go to https://render.com and sign up with GitHub (free, no card needed).

---

### Step 4 – Deploy on Render

1. From your Render dashboard click **"New +"**
2. Select **"Web Service"**
3. Click **"Connect a repository"** → select `lamp-stack-azure`
4. Fill in the settings:

| Setting | Value |
|---------|-------|
| Name | `lamp-stack-azure` |
| Region | Oregon (US) |
| Branch | `main` |
| Runtime | **Docker** |
| Plan | **Free** |

5. Click **"Create Web Service"**
6. Wait ~3 minutes for the build to finish ✅

---

### Step 5 – Get your live URL

After deploy Render shows:
```
https://lamp-stack-azure.onrender.com
```

That is your **hosted page URL** — paste it into the Eduonix project link box!

---

## Project Files

```
lamp-render/
├── Dockerfile               # PHP 8.2 + Apache, Render-compatible
├── docker-entrypoint.sh     # Sets Apache port from Render's PORT variable
├── render.yaml              # Render Blueprint (auto-config)
├── app/
│   ├── index.php            # Hosted PHP page (shows server info)
│   ├── css/style.css        # Azure-themed dark UI
│   └── js/app.js
└── README.md
```

---

## Test Locally Before Deploying

```bash
docker build -t lamp-render .
docker run -p 8080:80 lamp-render
# Open: http://localhost:8080
```

---

## Troubleshooting

| Problem | Fix |
|---------|-----|
| Build fails | Check Dockerfile is at root of repo |
| Site shows "not found" | Make sure app/index.php is uploaded |
| Port error | docker-entrypoint.sh handles this automatically |
| Slow first load | Normal on free tier – spins down after 15min inactivity |
